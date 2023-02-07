import fetch from "../modules/fetch.js";
/**
 *-----------------------------------------------
 * @param Model entity.name
 * @param Attributes entity.attribute(show on table)
 * @param Button attribute.actions.key
 * @param btn_attribute key:['icon','tooltip','color']
 * @param Base_URL entiry.url
 * @return GUI BREAD
 */
/**
 * JQuery DOM EventListener
 * Note : Update if necessary only
 */

let evnt;
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    evnt = "touchstart";
    // console.log("asd");
}else{
    evnt = "click";
}

$("body").on(evnt, ".btn-find", async (e) =>
    state.show($(e.currentTarget).data("index"))
);
$("body").on(evnt, ".btn-delete", (e) =>
    state.destroy($(e.currentTarget).data("index"))
);
$("body").on(evnt, ".btn-approved", function(e){
    updateStatusApprove($(e.currentTarget).data("id"));
});

$("#searchData").keyup(function(){
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchData");
    filter = input.value.toUpperCase();
    table = document.getElementById("table-main");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }
    }
});

$("#uploadUsersData").click(function(event){
    event.preventDefault();

    var datas = $("#upload_usersdata")[0].files;

    var fd = new FormData();
    fd.append('upload_usersdata',datas[0]);

    $.ajax({
        method: "POST",
        url: "api/users/upload/save",
        data: fd, // serializes the form's elements.
        dataType: "JSON",
        contentType: false,
        cache:false,
        processData:false,
        success: function(data)
        {
            swal.fire({
                position: "top-end",
                icon: "success",
                title: "Uploaded Successfully",
                showConfirmButton: false,
                timer: 1500,
                footer: "<a href>CleverTech</a>",
            });
            $('#uploadUsersDataModal').modal('toggle'); 
            state.ask();
            
        },
        statusCode: {
            500: function(xhr) {
                swal.fire({
                    icon: "error",
                    title: "Oops...",
                    showConfirmButton: false,
                    timer: 3000,
                    text: xhr.statusText,
                    footer: "<a href>CleverTech</a>",
                });
            },
            404: function(xhr) {
                swal.fire({
                    icon: "error",
                    title: "Oops...",
                    showConfirmButton: false,
                    timer: 3000,
                    text: xhr.statusText,
                    footer: "<a href>CleverTech</a>",
                });
            }
          }

        // error: function (xhr) {
        // var err = JSON.parse(xhr.responseText);
        // alert(err.message);
        // }
    });
});

// $(document).ready(function(){
//     setInterval(function(){
//         state.ask();
//         }, 20000);
// })


function updateStatusApprove(id){
    swal.fire({
        title: "Are you sure",
        text: "You Will Approve This User?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Approve it!",
    }).then((result) => {  
	/* Read more about isConfirmed, isDenied below */  
    console.log(result);
    if (result.value==true) {   

        let stat = {
            isApproved:1,
        };
        
        $.ajax({
            type: "PUT",
            url: "api/users/"+id+"/updatestatus",
            data: stat, // serializes the form's elements.
            dataType: "json",
            encode: true,
            success: function(data)
            {
                swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Your work has been saved",
                    showConfirmButton: false,
                    timer: 1500,
                    footer: "<a href>InnovaTech</a>",
                });
                state.ask();
            }
        });
    }
});

}
// const togglePassword = document.querySelector("#togglePassword");
// const password = document.querySelector("#password");

// togglePassword.addEventListener("click", function () {
//   const type = password.getAttribute("type") === "password" ? "text" : "password";
//   password.setAttribute("type", type);
//   this.classList.toggle('fa-eye');
//   this.classList.toggle('fa-eye-slash');
// });

const state = {
    /* [Table] */
    entity: {
        name: "user",
        attributes: ["roleName", "fullName", "address", "statusName", "username"],
        actions: {
            approved: ["fa fa-thumbs-up", "Approve", "success"],
            find: ["fa fa-pencil-alt", "Edit", "info"],
            delete: ["fa fa-trash", "Delete", "danger"],
        },
        baseUrl: "api",
    },
    /* [Object Mapping] */
    models: [],
    /* [Tag object] */
    // btnKey: document.getElementById("key"),
    // btnLook: document.getElementById("look"),
    btnNew: document.getElementById("btn-new"),
    Userid: document.getElementById("id"),
    btnEngrave: document.getElementById("engrave"),
    activeIndex: 0,
    btnUpdate: null,
    btnDelete: null,
    /* [initialized] */
    init: () => {
        // Attach listeners
        // state.btnKey.addEventListener("keyup", state.ask);
        // state.btnKey.disabled = false;
        // state.btnLook.addEventListener("click", state.ask);
        // state.btnLook.disabled = false;
        state.btnNew.addEventListener("click", state.create);
        state.btnNew.disabled = false;

        fetch.option_list('user', 'display_name');

        state.ask();
    },
    /* [ACTIONS] */
    ask: async () => {
        state.models = await fetch.translate(state.entity);
        if (state.models) {
            state.models.forEach((model) => fetch.writer(state.entity, model));
        }
    },
    create: () => {
        state.btnEngrave.innerHTML = "Save";

        state.btnEngrave.removeEventListener("click", state.update);
        state.btnEngrave.addEventListener("click", state.store);
        fetch.showModal();
    },
    show: (i) => {
        state.activeIndex = i;
        state.btnEngrave.innerHTML = "Update";

        state.btnEngrave.removeEventListener("click", state.store);
        state.btnEngrave.addEventListener("click", state.update);
        state.btnEngrave.setAttribute("data-id", state.models[i].id);
        fetch.showOnModal(state.models[i]);
    },
    store: async (e) => {
        e.preventDefault();
        let params = $("#set-Model").serializeArray();
        let model = await fetch.store(state.entity, params);
        if (model) {
            state.models.push(model);
            fetch.writer(state.entity, model);
            $("#modal-main").modal("hide");
        }
    },
    update: async () => {
        let params = $("#set-Model").serializeArray();
        let pk = state.btnEngrave.getAttribute("data-id");
        let model = await fetch.update(state.entity, pk, params);

        if (model) {
            //    console.log(model)
            state.models[state.activeIndex] = model;
            fetch.writer(state.entity, model);

            $("#modal-main").modal("hide");
        }
    },
    destroy: async (i) => {
        let pkey = state.models[i].id;
        let ans = await fetch.destroy(state.entity, pkey);
        if (ans) {
            state.models.splice(i, 1);
        }
    },
};

window.addEventListener("load", state.init);
