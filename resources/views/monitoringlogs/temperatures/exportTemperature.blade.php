<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
                            /*!
                    * Bootstrap v4.0.0-alpha.3 (http://getbootstrap.com)
                    * Copyright 2011-2016 The Bootstrap Authors
                    * Copyright 2011-2016 Twitter, Inc.
                    * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
                    */
                    /*! normalize.css v4.2.0 | MIT License | github.com/necolas/normalize.css */
                    html {
                        font-family: sans-serif;
                        line-height: 1.15;
                        -ms-text-size-adjust: 100%;
                        -webkit-text-size-adjust: 100%;
                    }

                    body {
                        margin: 0;
                    }

                    article,
                    aside,
                    details,
                    figcaption,
                    figure,
                    footer,
                    header,
                    main,
                    menu,
                    nav,
                    section,
                    summary {
                        display: block;
                    }

                    audio,
                    canvas,
                    progress,
                    video {
                        display: inline-block;
                    }

                    audio:not([controls]) {
                        display: none;
                        height: 0;
                    }

                    progress {
                        vertical-align: baseline;
                    }

                    template,
                    [hidden] {
                        display: none;
                    }

                    a {
                        background-color: transparent;
                        -webkit-text-decoration-skip: objects;
                    }

                    a:active,
                    a:hover {
                        outline-width: 0;
                    }

                    abbr[title] {
                        border-bottom: none;
                        text-decoration: underline;
                        text-decoration: underline dotted;
                    }

                    b,
                    strong {
                        font-weight: inherit;
                    }

                    b,
                    strong {
                        font-weight: bolder;
                    }

                    dfn {
                        font-style: italic;
                    }

                    h1 {
                        font-size: 2em;
                        margin: 0.67em 0;
                    }

                    mark {
                        background-color: #ff0;
                        color: #000;
                    }

                    small {
                        font-size: 80%;
                    }

                    sub,
                    sup {
                        font-size: 75%;
                        line-height: 0;
                        position: relative;
                        vertical-align: baseline;
                    }

                    sub {
                        bottom: -0.25em;
                    }

                    sup {
                        top: -0.5em;
                    }

                    img {
                        border-style: none;
                    }

                    svg:not(:root) {
                        overflow: hidden;
                    }

                    code,
                    kbd,
                    pre,
                    samp {
                        font-family: monospace, monospace;
                        font-size: 1em;
                    }

                    figure {
                        margin: 1em 40px;
                    }

                    hr {
                        box-sizing: content-box;
                        height: 0;
                        overflow: visible;
                    }

                    button,
                    input,
                    optgroup,
                    select,
                    textarea {
                        font: inherit;
                        margin: 0;
                    }

                    optgroup {
                        font-weight: bold;
                    }

                    button,
                    input {
                        overflow: visible;
                    }

                    button,
                    select {
                        text-transform: none;
                    }

                    button,
                    html [type="button"],
                    [type="reset"],
                    [type="submit"] {
                        -webkit-appearance: button;
                    }

                    button::-moz-focus-inner,
                    [type="button"]::-moz-focus-inner,
                    [type="reset"]::-moz-focus-inner,
                    [type="submit"]::-moz-focus-inner {
                        border-style: none;
                        padding: 0;
                    }

                    button:-moz-focusring,
                    [type="button"]:-moz-focusring,
                    [type="reset"]:-moz-focusring,
                    [type="submit"]:-moz-focusring {
                        outline: 1px dotted ButtonText;
                    }

                    fieldset {
                        border: 1px solid #c0c0c0;
                        margin: 0 2px;
                        padding: 0.35em 0.625em 0.75em;
                    }

                    legend {
                        box-sizing: border-box;
                        color: inherit;
                        display: table;
                        max-width: 100%;
                        padding: 0;
                        white-space: normal;
                    }

                    textarea {
                        overflow: auto;
                    }

                    [type="checkbox"],
                    [type="radio"] {
                        box-sizing: border-box;
                        padding: 0;
                    }

                    [type="number"]::-webkit-inner-spin-button,
                    [type="number"]::-webkit-outer-spin-button {
                        height: auto;
                    }

                    [type="search"] {
                        -webkit-appearance: textfield;
                        outline-offset: -2px;
                    }

                    [type="search"]::-webkit-search-cancel-button,
                    [type="search"]::-webkit-search-decoration {
                        -webkit-appearance: none;
                    }

                    ::-webkit-input-placeholder {
                        color: inherit;
                        opacity: 0.54;
                    }

                    ::-webkit-file-upload-button {
                        -webkit-appearance: button;
                        font: inherit;
                    }

                    @media print {
                        *,
                        *::before,
                        *::after,
                        *::first-letter,
                        p::first-line,
                        div::first-line,
                        blockquote::first-line,
                        li::first-line {
                            text-shadow: none !important;
                            box-shadow: none !important;
                        }

                        a,
                        a:visited {
                            text-decoration: underline;
                        }

                        abbr[title]::after {
                            content: " (" attr(title) ")";
                        }

                        pre {
                            white-space: pre-wrap !important;
                        }

                        pre,
                        blockquote {
                            border: 1px solid #999;
                            page-break-inside: avoid;
                        }

                        thead {
                            display: table-header-group;
                        }

                        tr,
                        img {
                            page-break-inside: avoid;
                        }

                        p,
                        h2,
                        h3 {
                            orphans: 3;
                            widows: 3;
                        }

                        h2,
                        h3 {
                            page-break-after: avoid;
                        }

                        .navbar {
                            display: none;
                        }

                        .btn > .caret,
                        .dropup > .btn > .caret {
                            border-top-color: #000 !important;
                        }

                        .tag {
                            border: 1px solid #000;
                        }

                        .table {
                            border-collapse: collapse !important;
                        }

                        .table td,
                        .table th {
                            background-color: #fff !important;
                        }

                        .table-bordered th,
                        .table-bordered td {
                            border: 1px solid #ddd !important;
                        }
                    }

                    html {
                        box-sizing: border-box;
                    }

                    *,
                    *::before,
                    *::after {
                        box-sizing: inherit;
                    }

                    @-ms-viewport {
                        width: device-width;
                    }

                    html {
                        font-size: 16px;
                        -ms-overflow-style: scrollbar;
                        -webkit-tap-highlight-color: transparent;
                    }

                    body {
                        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                        font-size: 1rem;
                        line-height: 1.5;
                        color: #373a3c;
                        background-color: #fff;
                    }

                    [tabindex="-1"]:focus {
                        outline: none !important;
                    }

                    h1, h2, h3, h4, h5, h6 {
                        margin-top: 0;
                        margin-bottom: .5rem;
                    }

                    p {
                        margin-top: 0;
                        margin-bottom: 1rem;
                    }

                    abbr[title],
                    abbr[data-original-title] {
                        cursor: help;
                        border-bottom: 1px dotted #818a91;
                    }

                    address {
                        margin-bottom: 1rem;
                        font-style: normal;
                        line-height: inherit;
                    }

                    ol,
                    ul,
                    dl {
                        margin-top: 0;
                        margin-bottom: 1rem;
                    }

                    ol ol,
                    ul ul,
                    ol ul,
                    ul ol {
                        margin-bottom: 0;
                    }

                    dt {
                        font-weight: bold;
                    }

                    dd {
                        margin-bottom: .5rem;
                        margin-left: 0;
                    }

                    blockquote {
                        margin: 0 0 1rem;
                    }

                    a {
                        color: #0275d8;
                        text-decoration: none;
                    }

                    a:focus, a:hover {
                        color: #014c8c;
                        text-decoration: underline;
                    }

                    a:focus {
                        outline: 5px auto -webkit-focus-ring-color;
                        outline-offset: -2px;
                    }

                    a:not([href]):not([tabindex]) {
                        color: inherit;
                        text-decoration: none;
                    }

                    a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
                        color: inherit;
                        text-decoration: none;
                    }

                    a:not([href]):not([tabindex]):focus {
                        outline: none;
                    }

                    pre {
                        margin-top: 0;
                        margin-bottom: 1rem;
                        overflow: auto;
                    }

                    figure {
                        margin: 0 0 1rem;
                    }

                    img {
                        vertical-align: middle;
                    }

                    [role="button"] {
                        cursor: pointer;
                    }

                    a,
                    area,
                    button,
                    [role="button"],
                    input,
                    label,
                    select,
                    summary,
                    textarea {
                        touch-action: manipulation;
                    }

                    table {
                        border-collapse: collapse;
                        background-color: transparent;
                    }

                    caption {
                        padding-top: 0.75rem;
                        padding-bottom: 0.75rem;
                        color: #818a91;
                        text-align: left;
                        caption-side: bottom;
                    }

                    th {
                        text-align: left;
                    }

                    label {
                        display: inline-block;
                        margin-bottom: .5rem;
                    }

                    button:focus {
                        outline: 1px dotted;
                        outline: 5px auto -webkit-focus-ring-color;
                    }

                    input,
                    button,
                    select,
                    textarea {
                        line-height: inherit;
                    }

                    input[type="radio"]:disabled,
                    input[type="checkbox"]:disabled {
                        cursor: not-allowed;
                    }

                    input[type="date"],
                    input[type="time"],
                    input[type="datetime-local"],
                    input[type="month"] {
                        -webkit-appearance: listbox;
                    }

                    textarea {
                        resize: vertical;
                    }

                    fieldset {
                        min-width: 0;
                        padding: 0;
                        margin: 0;
                        border: 0;
                    }

                    legend {
                        display: block;
                        width: 100%;
                        padding: 0;
                        margin-bottom: .5rem;
                        font-size: 1.5rem;
                        line-height: inherit;
                    }

                    input[type="search"] {
                        -webkit-appearance: none;
                    }

                    output {
                        display: inline-block;
                    }

                    [hidden] {
                        display: none !important;
                    }

                    h1, h2, h3, h4, h5, h6,
                    .h1, .h2, .h3, .h4, .h5, .h6 {
                        margin-bottom: 0.5rem;
                        font-family: inherit;
                        font-weight: 500;
                        line-height: 1.1;
                        color: inherit;
                    }

                    h1, .h1 {
                        font-size: 2.5rem;
                    }

                    h2, .h2 {
                        font-size: 2rem;
                    }

                    h3, .h3 {
                        font-size: 1.75rem;
                    }

                    h4, .h4 {
                        font-size: 1.5rem;
                    }

                    h5, .h5 {
                        font-size: 1.25rem;
                    }

                    h6, .h6 {
                        font-size: 1rem;
                    }

                    .lead {
                        font-size: 1.25rem;
                        font-weight: 300;
                    }

                    .display-1 {
                        font-size: 6rem;
                        font-weight: 300;
                    }

                    .display-2 {
                        font-size: 5.5rem;
                        font-weight: 300;
                    }

                    .display-3 {
                        font-size: 4.5rem;
                        font-weight: 300;
                    }

                    .display-4 {
                        font-size: 3.5rem;
                        font-weight: 300;
                    }

                    hr {
                        margin-top: 1rem;
                        margin-bottom: 1rem;
                        border: 0;
                        border-top: 1px solid rgba(0, 0, 0, 0.1);
                    }

                    small,
                    .small {
                        font-size: 80%;
                        font-weight: normal;
                    }

                    mark,
                    .mark {
                        padding: 0.2em;
                        background-color: #fcf8e3;
                    }

                    .list-unstyled {
                        padding-left: 0;
                        list-style: none;
                    }

                    .list-inline {
                        padding-left: 0;
                        list-style: none;
                    }

                    .list-inline-item {
                        display: inline-block;
                    }

                    .list-inline-item:not(:last-child) {
                        margin-right: 5px;
                    }

                    .initialism {
                        font-size: 90%;
                        text-transform: uppercase;
                    }

                    .blockquote {
                        padding: 0.5rem 1rem;
                        margin-bottom: 1rem;
                        font-size: 1.25rem;
                        border-left: 0.25rem solid #eceeef;
                    }

                    .blockquote-footer {
                        display: block;
                        font-size: 80%;
                        color: #818a91;
                    }

                    .blockquote-footer::before {
                        content: "\2014 \00A0";
                    }

                    .blockquote-reverse {
                        padding-right: 1rem;
                        padding-left: 0;
                        text-align: right;
                        border-right: 0.25rem solid #eceeef;
                        border-left: 0;
                    }

                    .blockquote-reverse .blockquote-footer::before {
                        content: "";
                    }

                    .blockquote-reverse .blockquote-footer::after {
                        content: "\00A0 \2014";
                    }

                    .img-fluid {
                        max-width: 100%;
                        height: auto;
                    }

                    .img-thumbnail {
                        padding: 0.25rem;
                        background-color: #fff;
                        border: 1px solid #ddd;
                        border-radius: 0.25rem;
                        transition: all .2s ease-in-out;
                        max-width: 100%;
                        height: auto;
                    }

                    .figure {
                        display: inline-block;
                    }

                    .figure-img {
                        margin-bottom: 0.5rem;
                        line-height: 1;
                    }

                    .figure-caption {
                        font-size: 90%;
                        color: #818a91;
                    }

                    code,
                    kbd,
                    pre,
                    samp {
                        font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                    }

                    code {
                        padding: 0.2rem 0.4rem;
                        font-size: 90%;
                        color: #bd4147;
                        background-color: #f7f7f9;
                        border-radius: 0.25rem;
                    }

                    kbd {
                        padding: 0.2rem 0.4rem;
                        font-size: 90%;
                        color: #fff;
                        background-color: #333;
                        border-radius: 0.2rem;
                    }

                    kbd kbd {
                        padding: 0;
                        font-size: 100%;
                        font-weight: bold;
                    }

                    pre {
                        display: block;
                        margin-top: 0;
                        margin-bottom: 1rem;
                        font-size: 90%;
                        color: #373a3c;
                    }

                    pre code {
                        padding: 0;
                        font-size: inherit;
                        color: inherit;
                        background-color: transparent;
                        border-radius: 0;
                    }

                    .pre-scrollable {
                        max-height: 340px;
                        overflow-y: scroll;
                    }

                    .container {
                        margin-left: auto;
                        margin-right: auto;
                        padding-left: 15px;
                        padding-right: 15px;
                    }

                    @media (min-width: 576px) {
                        .container {
                            width: 540px;
                            max-width: 100%;
                        }
                    }

                    @media (min-width: 768px) {
                        .container {
                            width: 720px;
                            max-width: 100%;
                        }
                    }

                    @media (min-width: 992px) {
                        .container {
                            width: 960px;
                            max-width: 100%;
                        }
                    }

                    @media (min-width: 1200px) {
                        .container {
                            width: 1140px;
                            max-width: 100%;
                        }
                    }

                    .container-fluid {
                        margin-left: auto;
                        margin-right: auto;
                        padding-left: 15px;
                        padding-right: 15px;
                    }

                    .row {
                        display: flex;
                        flex-wrap: wrap;
                        margin-right: -15px;
                        margin-left: -15px;
                    }

                    @media (min-width: 576px) {
                        .row {
                            margin-right: -15px;
                            margin-left: -15px;
                        }
                    }

                    @media (min-width: 768px) {
                        .row {
                            margin-right: -15px;
                            margin-left: -15px;
                        }
                    }

                    @media (min-width: 992px) {
                        .row {
                            margin-right: -15px;
                            margin-left: -15px;
                        }
                    }

                    @media (min-width: 1200px) {
                        .row {
                            margin-right: -15px;
                            margin-left: -15px;
                        }
                    }

                    .col-xs, .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12, .col-sm, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-md, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-lg, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-xl, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12 {
                        position: relative;
                        min-height: 1px;
                        width: 100%;
                        padding-right: 15px;
                        padding-left: 15px;
                    }

                    @media (min-width: 576px) {
                        .col-xs, .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12, .col-sm, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-md, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-lg, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-xl, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12 {
                            padding-right: 15px;
                            padding-left: 15px;
                        }
                    }

                    @media (min-width: 768px) {
                        .col-xs, .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12, .col-sm, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-md, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-lg, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-xl, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12 {
                            padding-right: 15px;
                            padding-left: 15px;
                        }
                    }

                    @media (min-width: 992px) {
                        .col-xs, .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12, .col-sm, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-md, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-lg, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-xl, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12 {
                            padding-right: 15px;
                            padding-left: 15px;
                        }
                    }

                    @media (min-width: 1200px) {
                        .col-xs, .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12, .col-sm, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-md, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-lg, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-xl, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12 {
                            padding-right: 15px;
                            padding-left: 15px;
                        }
                    }

                    .col-xs {
                        flex-basis: 0;
                        flex-grow: 1;
                        max-width: 100%;
                    }

                    .col-xs-1 {
                        flex: 0 0 8.33333%;
                        max-width: 8.33333%;
                    }

                    .col-xs-2 {
                        flex: 0 0 16.66667%;
                        max-width: 16.66667%;
                    }

                    .col-xs-3 {
                        flex: 0 0 25%;
                        max-width: 25%;
                    }

                    .col-xs-4 {
                        flex: 0 0 33.33333%;
                        max-width: 33.33333%;
                    }

                    .col-xs-5 {
                        flex: 0 0 41.66667%;
                        max-width: 41.66667%;
                    }

                    .col-xs-6 {
                        flex: 0 0 50%;
                        max-width: 50%;
                    }

                    .col-xs-7 {
                        flex: 0 0 58.33333%;
                        max-width: 58.33333%;
                    }

                    .col-xs-8 {
                        flex: 0 0 66.66667%;
                        max-width: 66.66667%;
                    }

                    .col-xs-9 {
                        flex: 0 0 75%;
                        max-width: 75%;
                    }

                    .col-xs-10 {
                        flex: 0 0 83.33333%;
                        max-width: 83.33333%;
                    }

                    .col-xs-11 {
                        flex: 0 0 91.66667%;
                        max-width: 91.66667%;
                    }

                    .col-xs-12 {
                        flex: 0 0 100%;
                        max-width: 100%;
                    }

                    .pull-xs-0 {
                        right: auto;
                    }

                    .pull-xs-1 {
                        right: 8.33333%;
                    }

                    .pull-xs-2 {
                        right: 16.66667%;
                    }

                    .pull-xs-3 {
                        right: 25%;
                    }

                    .pull-xs-4 {
                        right: 33.33333%;
                    }

                    .pull-xs-5 {
                        right: 41.66667%;
                    }

                    .pull-xs-6 {
                        right: 50%;
                    }

                    .pull-xs-7 {
                        right: 58.33333%;
                    }

                    .pull-xs-8 {
                        right: 66.66667%;
                    }

                    .pull-xs-9 {
                        right: 75%;
                    }

                    .pull-xs-10 {
                        right: 83.33333%;
                    }

                    .pull-xs-11 {
                        right: 91.66667%;
                    }

                    .pull-xs-12 {
                        right: 100%;
                    }

                    .push-xs-0 {
                        left: auto;
                    }

                    .push-xs-1 {
                        left: 8.33333%;
                    }

                    .push-xs-2 {
                        left: 16.66667%;
                    }

                    .push-xs-3 {
                        left: 25%;
                    }

                    .push-xs-4 {
                        left: 33.33333%;
                    }

                    .push-xs-5 {
                        left: 41.66667%;
                    }

                    .push-xs-6 {
                        left: 50%;
                    }

                    .push-xs-7 {
                        left: 58.33333%;
                    }

                    .push-xs-8 {
                        left: 66.66667%;
                    }

                    .push-xs-9 {
                        left: 75%;
                    }

                    .push-xs-10 {
                        left: 83.33333%;
                    }

                    .push-xs-11 {
                        left: 91.66667%;
                    }

                    .push-xs-12 {
                        left: 100%;
                    }

                    .offset-xs-1 {
                        margin-left: 8.33333%;
                    }

                    .offset-xs-2 {
                        margin-left: 16.66667%;
                    }

                    .offset-xs-3 {
                        margin-left: 25%;
                    }

                    .offset-xs-4 {
                        margin-left: 33.33333%;
                    }

                    .offset-xs-5 {
                        margin-left: 41.66667%;
                    }

                    .offset-xs-6 {
                        margin-left: 50%;
                    }

                    .offset-xs-7 {
                        margin-left: 58.33333%;
                    }

                    .offset-xs-8 {
                        margin-left: 66.66667%;
                    }

                    .offset-xs-9 {
                        margin-left: 75%;
                    }

                    .offset-xs-10 {
                        margin-left: 83.33333%;
                    }

                    .offset-xs-11 {
                        margin-left: 91.66667%;
                    }

                    @media (min-width: 576px) {
                        .col-sm {
                            flex-basis: 0;
                            flex-grow: 1;
                            max-width: 100%;
                        }

                        .col-sm-1 {
                            flex: 0 0 8.33333%;
                            max-width: 8.33333%;
                        }

                        .col-sm-2 {
                            flex: 0 0 16.66667%;
                            max-width: 16.66667%;
                        }

                        .col-sm-3 {
                            flex: 0 0 25%;
                            max-width: 25%;
                        }

                        .col-sm-4 {
                            flex: 0 0 33.33333%;
                            max-width: 33.33333%;
                        }

                        .col-sm-5 {
                            flex: 0 0 41.66667%;
                            max-width: 41.66667%;
                        }

                        .col-sm-6 {
                            flex: 0 0 50%;
                            max-width: 50%;
                        }

                        .col-sm-7 {
                            flex: 0 0 58.33333%;
                            max-width: 58.33333%;
                        }

                        .col-sm-8 {
                            flex: 0 0 66.66667%;
                            max-width: 66.66667%;
                        }

                        .col-sm-9 {
                            flex: 0 0 75%;
                            max-width: 75%;
                        }

                        .col-sm-10 {
                            flex: 0 0 83.33333%;
                            max-width: 83.33333%;
                        }

                        .col-sm-11 {
                            flex: 0 0 91.66667%;
                            max-width: 91.66667%;
                        }

                        .col-sm-12 {
                            flex: 0 0 100%;
                            max-width: 100%;
                        }

                        .pull-sm-0 {
                            right: auto;
                        }

                        .pull-sm-1 {
                            right: 8.33333%;
                        }

                        .pull-sm-2 {
                            right: 16.66667%;
                        }

                        .pull-sm-3 {
                            right: 25%;
                        }

                        .pull-sm-4 {
                            right: 33.33333%;
                        }

                        .pull-sm-5 {
                            right: 41.66667%;
                        }

                        .pull-sm-6 {
                            right: 50%;
                        }

                        .pull-sm-7 {
                            right: 58.33333%;
                        }

                        .pull-sm-8 {
                            right: 66.66667%;
                        }

                        .pull-sm-9 {
                            right: 75%;
                        }

                        .pull-sm-10 {
                            right: 83.33333%;
                        }

                        .pull-sm-11 {
                            right: 91.66667%;
                        }

                        .pull-sm-12 {
                            right: 100%;
                        }

                        .push-sm-0 {
                            left: auto;
                        }

                        .push-sm-1 {
                            left: 8.33333%;
                        }

                        .push-sm-2 {
                            left: 16.66667%;
                        }

                        .push-sm-3 {
                            left: 25%;
                        }

                        .push-sm-4 {
                            left: 33.33333%;
                        }

                        .push-sm-5 {
                            left: 41.66667%;
                        }

                        .push-sm-6 {
                            left: 50%;
                        }

                        .push-sm-7 {
                            left: 58.33333%;
                        }

                        .push-sm-8 {
                            left: 66.66667%;
                        }

                        .push-sm-9 {
                            left: 75%;
                        }

                        .push-sm-10 {
                            left: 83.33333%;
                        }

                        .push-sm-11 {
                            left: 91.66667%;
                        }

                        .push-sm-12 {
                            left: 100%;
                        }

                        .offset-sm-0 {
                            margin-left: 0%;
                        }

                        .offset-sm-1 {
                            margin-left: 8.33333%;
                        }

                        .offset-sm-2 {
                            margin-left: 16.66667%;
                        }

                        .offset-sm-3 {
                            margin-left: 25%;
                        }

                        .offset-sm-4 {
                            margin-left: 33.33333%;
                        }

                        .offset-sm-5 {
                            margin-left: 41.66667%;
                        }

                        .offset-sm-6 {
                            margin-left: 50%;
                        }

                        .offset-sm-7 {
                            margin-left: 58.33333%;
                        }

                        .offset-sm-8 {
                            margin-left: 66.66667%;
                        }

                        .offset-sm-9 {
                            margin-left: 75%;
                        }

                        .offset-sm-10 {
                            margin-left: 83.33333%;
                        }

                        .offset-sm-11 {
                            margin-left: 91.66667%;
                        }
                    }

                    @media (min-width: 768px) {
                        .col-md {
                            flex-basis: 0;
                            flex-grow: 1;
                            max-width: 100%;
                        }

                        .col-md-1 {
                            flex: 0 0 8.33333%;
                            max-width: 8.33333%;
                        }

                        .col-md-2 {
                            flex: 0 0 16.66667%;
                            max-width: 16.66667%;
                        }

                        .col-md-3 {
                            flex: 0 0 25%;
                            max-width: 25%;
                        }

                        .col-md-4 {
                            flex: 0 0 33.33333%;
                            max-width: 33.33333%;
                        }

                        .col-md-5 {
                            flex: 0 0 41.66667%;
                            max-width: 41.66667%;
                        }

                        .col-md-6 {
                            flex: 0 0 50%;
                            max-width: 50%;
                        }

                        .col-md-7 {
                            flex: 0 0 58.33333%;
                            max-width: 58.33333%;
                        }

                        .col-md-8 {
                            flex: 0 0 66.66667%;
                            max-width: 66.66667%;
                        }

                        .col-md-9 {
                            flex: 0 0 75%;
                            max-width: 75%;
                        }

                        .col-md-10 {
                            flex: 0 0 83.33333%;
                            max-width: 83.33333%;
                        }

                        .col-md-11 {
                            flex: 0 0 91.66667%;
                            max-width: 91.66667%;
                        }

                        .col-md-12 {
                            flex: 0 0 100%;
                            max-width: 100%;
                        }

                        .pull-md-0 {
                            right: auto;
                        }

                        .pull-md-1 {
                            right: 8.33333%;
                        }

                        .pull-md-2 {
                            right: 16.66667%;
                        }

                        .pull-md-3 {
                            right: 25%;
                        }

                        .pull-md-4 {
                            right: 33.33333%;
                        }

                        .pull-md-5 {
                            right: 41.66667%;
                        }

                        .pull-md-6 {
                            right: 50%;
                        }

                        .pull-md-7 {
                            right: 58.33333%;
                        }

                        .pull-md-8 {
                            right: 66.66667%;
                        }

                        .pull-md-9 {
                            right: 75%;
                        }

                        .pull-md-10 {
                            right: 83.33333%;
                        }

                        .pull-md-11 {
                            right: 91.66667%;
                        }

                        .pull-md-12 {
                            right: 100%;
                        }

                        .push-md-0 {
                            left: auto;
                        }

                        .push-md-1 {
                            left: 8.33333%;
                        }

                        .push-md-2 {
                            left: 16.66667%;
                        }

                        .push-md-3 {
                            left: 25%;
                        }

                        .push-md-4 {
                            left: 33.33333%;
                        }

                        .push-md-5 {
                            left: 41.66667%;
                        }

                        .push-md-6 {
                            left: 50%;
                        }

                        .push-md-7 {
                            left: 58.33333%;
                        }

                        .push-md-8 {
                            left: 66.66667%;
                        }

                        .push-md-9 {
                            left: 75%;
                        }

                        .push-md-10 {
                            left: 83.33333%;
                        }

                        .push-md-11 {
                            left: 91.66667%;
                        }

                        .push-md-12 {
                            left: 100%;
                        }

                        .offset-md-0 {
                            margin-left: 0%;
                        }

                        .offset-md-1 {
                            margin-left: 8.33333%;
                        }

                        .offset-md-2 {
                            margin-left: 16.66667%;
                        }

                        .offset-md-3 {
                            margin-left: 25%;
                        }

                        .offset-md-4 {
                            margin-left: 33.33333%;
                        }

                        .offset-md-5 {
                            margin-left: 41.66667%;
                        }

                        .offset-md-6 {
                            margin-left: 50%;
                        }

                        .offset-md-7 {
                            margin-left: 58.33333%;
                        }

                        .offset-md-8 {
                            margin-left: 66.66667%;
                        }

                        .offset-md-9 {
                            margin-left: 75%;
                        }

                        .offset-md-10 {
                            margin-left: 83.33333%;
                        }

                        .offset-md-11 {
                            margin-left: 91.66667%;
                        }
                    }

                    @media (min-width: 992px) {
                        .col-lg {
                            flex-basis: 0;
                            flex-grow: 1;
                            max-width: 100%;
                        }

                        .col-lg-1 {
                            flex: 0 0 8.33333%;
                            max-width: 8.33333%;
                        }

                        .col-lg-2 {
                            flex: 0 0 16.66667%;
                            max-width: 16.66667%;
                        }

                        .col-lg-3 {
                            flex: 0 0 25%;
                            max-width: 25%;
                        }

                        .col-lg-4 {
                            flex: 0 0 33.33333%;
                            max-width: 33.33333%;
                        }

                        .col-lg-5 {
                            flex: 0 0 41.66667%;
                            max-width: 41.66667%;
                        }

                        .col-lg-6 {
                            flex: 0 0 50%;
                            max-width: 50%;
                        }

                        .col-lg-7 {
                            flex: 0 0 58.33333%;
                            max-width: 58.33333%;
                        }

                        .col-lg-8 {
                            flex: 0 0 66.66667%;
                            max-width: 66.66667%;
                        }

                        .col-lg-9 {
                            flex: 0 0 75%;
                            max-width: 75%;
                        }

                        .col-lg-10 {
                            flex: 0 0 83.33333%;
                            max-width: 83.33333%;
                        }

                        .col-lg-11 {
                            flex: 0 0 91.66667%;
                            max-width: 91.66667%;
                        }

                        .col-lg-12 {
                            flex: 0 0 100%;
                            max-width: 100%;
                        }

                        .pull-lg-0 {
                            right: auto;
                        }

                        .pull-lg-1 {
                            right: 8.33333%;
                        }

                        .pull-lg-2 {
                            right: 16.66667%;
                        }

                        .pull-lg-3 {
                            right: 25%;
                        }

                        .pull-lg-4 {
                            right: 33.33333%;
                        }

                        .pull-lg-5 {
                            right: 41.66667%;
                        }

                        .pull-lg-6 {
                            right: 50%;
                        }

                        .pull-lg-7 {
                            right: 58.33333%;
                        }

                        .pull-lg-8 {
                            right: 66.66667%;
                        }

                        .pull-lg-9 {
                            right: 75%;
                        }

                        .pull-lg-10 {
                            right: 83.33333%;
                        }

                        .pull-lg-11 {
                            right: 91.66667%;
                        }

                        .pull-lg-12 {
                            right: 100%;
                        }

                        .push-lg-0 {
                            left: auto;
                        }

                        .push-lg-1 {
                            left: 8.33333%;
                        }

                        .push-lg-2 {
                            left: 16.66667%;
                        }

                        .push-lg-3 {
                            left: 25%;
                        }

                        .push-lg-4 {
                            left: 33.33333%;
                        }

                        .push-lg-5 {
                            left: 41.66667%;
                        }

                        .push-lg-6 {
                            left: 50%;
                        }

                        .push-lg-7 {
                            left: 58.33333%;
                        }

                        .push-lg-8 {
                            left: 66.66667%;
                        }

                        .push-lg-9 {
                            left: 75%;
                        }

                        .push-lg-10 {
                            left: 83.33333%;
                        }

                        .push-lg-11 {
                            left: 91.66667%;
                        }

                        .push-lg-12 {
                            left: 100%;
                        }

                        .offset-lg-0 {
                            margin-left: 0%;
                        }

                        .offset-lg-1 {
                            margin-left: 8.33333%;
                        }

                        .offset-lg-2 {
                            margin-left: 16.66667%;
                        }

                        .offset-lg-3 {
                            margin-left: 25%;
                        }

                        .offset-lg-4 {
                            margin-left: 33.33333%;
                        }

                        .offset-lg-5 {
                            margin-left: 41.66667%;
                        }

                        .offset-lg-6 {
                            margin-left: 50%;
                        }

                        .offset-lg-7 {
                            margin-left: 58.33333%;
                        }

                        .offset-lg-8 {
                            margin-left: 66.66667%;
                        }

                        .offset-lg-9 {
                            margin-left: 75%;
                        }

                        .offset-lg-10 {
                            margin-left: 83.33333%;
                        }

                        .offset-lg-11 {
                            margin-left: 91.66667%;
                        }
                    }

                    @media (min-width: 1200px) {
                        .col-xl {
                            flex-basis: 0;
                            flex-grow: 1;
                            max-width: 100%;
                        }

                        .col-xl-1 {
                            flex: 0 0 8.33333%;
                            max-width: 8.33333%;
                        }

                        .col-xl-2 {
                            flex: 0 0 16.66667%;
                            max-width: 16.66667%;
                        }

                        .col-xl-3 {
                            flex: 0 0 25%;
                            max-width: 25%;
                        }

                        .col-xl-4 {
                            flex: 0 0 33.33333%;
                            max-width: 33.33333%;
                        }

                        .col-xl-5 {
                            flex: 0 0 41.66667%;
                            max-width: 41.66667%;
                        }

                        .col-xl-6 {
                            flex: 0 0 50%;
                            max-width: 50%;
                        }

                        .col-xl-7 {
                            flex: 0 0 58.33333%;
                            max-width: 58.33333%;
                        }

                        .col-xl-8 {
                            flex: 0 0 66.66667%;
                            max-width: 66.66667%;
                        }

                        .col-xl-9 {
                            flex: 0 0 75%;
                            max-width: 75%;
                        }

                        .col-xl-10 {
                            flex: 0 0 83.33333%;
                            max-width: 83.33333%;
                        }

                        .col-xl-11 {
                            flex: 0 0 91.66667%;
                            max-width: 91.66667%;
                        }

                        .col-xl-12 {
                            flex: 0 0 100%;
                            max-width: 100%;
                        }

                        .pull-xl-0 {
                            right: auto;
                        }

                        .pull-xl-1 {
                            right: 8.33333%;
                        }

                        .pull-xl-2 {
                            right: 16.66667%;
                        }

                        .pull-xl-3 {
                            right: 25%;
                        }

                        .pull-xl-4 {
                            right: 33.33333%;
                        }

                        .pull-xl-5 {
                            right: 41.66667%;
                        }

                        .pull-xl-6 {
                            right: 50%;
                        }

                        .pull-xl-7 {
                            right: 58.33333%;
                        }

                        .pull-xl-8 {
                            right: 66.66667%;
                        }

                        .pull-xl-9 {
                            right: 75%;
                        }

                        .pull-xl-10 {
                            right: 83.33333%;
                        }

                        .pull-xl-11 {
                            right: 91.66667%;
                        }

                        .pull-xl-12 {
                            right: 100%;
                        }

                        .push-xl-0 {
                            left: auto;
                        }

                        .push-xl-1 {
                            left: 8.33333%;
                        }

                        .push-xl-2 {
                            left: 16.66667%;
                        }

                        .push-xl-3 {
                            left: 25%;
                        }

                        .push-xl-4 {
                            left: 33.33333%;
                        }

                        .push-xl-5 {
                            left: 41.66667%;
                        }

                        .push-xl-6 {
                            left: 50%;
                        }

                        .push-xl-7 {
                            left: 58.33333%;
                        }

                        .push-xl-8 {
                            left: 66.66667%;
                        }

                        .push-xl-9 {
                            left: 75%;
                        }

                        .push-xl-10 {
                            left: 83.33333%;
                        }

                        .push-xl-11 {
                            left: 91.66667%;
                        }

                        .push-xl-12 {
                            left: 100%;
                        }

                        .offset-xl-0 {
                            margin-left: 0%;
                        }

                        .offset-xl-1 {
                            margin-left: 8.33333%;
                        }

                        .offset-xl-2 {
                            margin-left: 16.66667%;
                        }

                        .offset-xl-3 {
                            margin-left: 25%;
                        }

                        .offset-xl-4 {
                            margin-left: 33.33333%;
                        }

                        .offset-xl-5 {
                            margin-left: 41.66667%;
                        }

                        .offset-xl-6 {
                            margin-left: 50%;
                        }

                        .offset-xl-7 {
                            margin-left: 58.33333%;
                        }

                        .offset-xl-8 {
                            margin-left: 66.66667%;
                        }

                        .offset-xl-9 {
                            margin-left: 75%;
                        }

                        .offset-xl-10 {
                            margin-left: 83.33333%;
                        }

                        .offset-xl-11 {
                            margin-left: 91.66667%;
                        }
                    }

                    .table {
                        width: 100%;
                        max-width: 100%;
                        margin-bottom: 1rem;
                    }

                    .table th,
                    .table td {
                        padding: 0.75rem;
                        vertical-align: top;
                        border-top: 1px solid #eceeef;
                    }

                    .table thead th {
                        vertical-align: bottom;
                        border-bottom: 2px solid #eceeef;
                    }

                    .table tbody + tbody {
                        border-top: 2px solid #eceeef;
                    }

                    .table .table {
                        background-color: #fff;
                    }

                    .table-sm th,
                    .table-sm td {
                        padding: 0.3rem;
                    }

                    .table-bordered {
                        border: 1px solid #eceeef;
                    }

                    .table-bordered th,
                    .table-bordered td {
                        border: 1px solid #eceeef;
                    }

                    .table-bordered thead th,
                    .table-bordered thead td {
                        border-bottom-width: 2px;
                    }

                    .table-striped tbody tr:nth-of-type(odd) {
                        background-color: rgba(0, 0, 0, 0.05);
                    }

                    .table-hover tbody tr:hover {
                        background-color: rgba(0, 0, 0, 0.075);
                    }

                    .table-active,
                    .table-active > th,
                    .table-active > td {
                        background-color: rgba(0, 0, 0, 0.075);
                    }

                    .table-hover .table-active:hover {
                        background-color: rgba(0, 0, 0, 0.075);
                    }

                    .table-hover .table-active:hover > td,
                    .table-hover .table-active:hover > th {
                        background-color: rgba(0, 0, 0, 0.075);
                    }

                    .table-success,
                    .table-success > th,
                    .table-success > td {
                        background-color: #dff0d8;
                    }

                    .table-hover .table-success:hover {
                        background-color: #d0e9c6;
                    }

                    .table-hover .table-success:hover > td,
                    .table-hover .table-success:hover > th {
                        background-color: #d0e9c6;
                    }

                    .table-info,
                    .table-info > th,
                    .table-info > td {
                        background-color: #d9edf7;
                    }

                    .table-hover .table-info:hover {
                        background-color: #c4e3f3;
                    }

                    .table-hover .table-info:hover > td,
                    .table-hover .table-info:hover > th {
                        background-color: #c4e3f3;
                    }

                    .table-warning,
                    .table-warning > th,
                    .table-warning > td {
                        background-color: #fcf8e3;
                    }

                    .table-hover .table-warning:hover {
                        background-color: #faf2cc;
                    }

                    .table-hover .table-warning:hover > td,
                    .table-hover .table-warning:hover > th {
                        background-color: #faf2cc;
                    }

                    .table-danger,
                    .table-danger > th,
                    .table-danger > td {
                        background-color: #f2dede;
                    }

                    .table-hover .table-danger:hover {
                        background-color: #ebcccc;
                    }

                    .table-hover .table-danger:hover > td,
                    .table-hover .table-danger:hover > th {
                        background-color: #ebcccc;
                    }

                    .thead-inverse th {
                        color: #fff;
                        background-color: #373a3c;
                    }

                    .thead-default th {
                        color: #55595c;
                        background-color: #eceeef;
                    }

                    .table-inverse {
                        color: #eceeef;
                        background-color: #373a3c;
                    }

                    .table-inverse th,
                    .table-inverse td,
                    .table-inverse thead th {
                        border-color: #55595c;
                    }

                    .table-inverse.table-bordered {
                        border: 0;
                    }

                    .table-responsive {
                        display: block;
                        width: 100%;
                        min-height: 0%;
                        overflow-x: auto;
                    }

                    .table-reflow thead {
                        float: left;
                    }

                    .table-reflow tbody {
                        display: block;
                        white-space: nowrap;
                    }

                    .table-reflow th,
                    .table-reflow td {
                        border-top: 1px solid #eceeef;
                        border-left: 1px solid #eceeef;
                    }

                    .table-reflow th:last-child,
                    .table-reflow td:last-child {
                        border-right: 1px solid #eceeef;
                    }

                    .table-reflow thead:last-child tr:last-child th,
                    .table-reflow thead:last-child tr:last-child td,
                    .table-reflow tbody:last-child tr:last-child th,
                    .table-reflow tbody:last-child tr:last-child td,
                    .table-reflow tfoot:last-child tr:last-child th,
                    .table-reflow tfoot:last-child tr:last-child td {
                        border-bottom: 1px solid #eceeef;
                    }

                    .table-reflow tr {
                        float: left;
                    }

                    .table-reflow tr th,
                    .table-reflow tr td {
                        display: block !important;
                        border: 1px solid #eceeef;
                    }

                    .form-control {
                        display: block;
                        width: 100%;
                        padding: 0.5rem 0.75rem;
                        font-size: 1rem;
                        line-height: 1.25;
                        color: #55595c;
                        background-color: #fff;
                        background-image: none;
                        background-clip: padding-box;
                        border: 1px solid rgba(0, 0, 0, 0.15);
                        border-radius: 0.25rem;
                    }

                    .form-control::-ms-expand {
                        background-color: transparent;
                        border: 0;
                    }

                    .form-control:focus {
                        color: #55595c;
                        background-color: #fff;
                        border-color: #66afe9;
                        outline: none;
                    }

                    .form-control::placeholder {
                        color: #999;
                        opacity: 1;
                    }

                    .form-control:disabled, .form-control[readonly] {
                        background-color: #eceeef;
                        opacity: 1;
                    }

                    .form-control:disabled {
                        cursor: not-allowed;
                    }

                    select.form-control:not([size]):not([multiple]) {
                        height: calc(2.5rem - 2px);
                    }

                    select.form-control:focus::-ms-value {
                        color: #55595c;
                        background-color: #fff;
                    }

                    .form-control-file,
                    .form-control-range {
                        display: block;
                    }

                    .col-form-label {
                        padding-top: 0.5rem;
                        padding-bottom: 0.5rem;
                        margin-bottom: 0;
                    }

                    .col-form-label-lg {
                        padding-top: 0.75rem;
                        padding-bottom: 0.75rem;
                        font-size: 1.25rem;
                    }

                    .col-form-label-sm {
                        padding-top: 0.25rem;
                        padding-bottom: 0.25rem;
                        font-size: 0.875rem;
                    }

                    .col-form-legend {
                        padding-top: 0.5rem;
                        padding-bottom: 0.5rem;
                        margin-bottom: 0;
                        font-size: 1rem;
                    }

                    .form-control-static {
                        padding-top: 0.5rem;
                        padding-bottom: 0.5rem;
                        line-height: 1.25;
                        border: solid transparent;
                        border-width: 1px 0;
                    }

                    .form-control-static.form-control-sm, .input-group-sm > .form-control-static.form-control,
                    .input-group-sm > .form-control-static.input-group-addon,
                    .input-group-sm > .input-group-btn > .form-control-static.btn, .form-control-static.form-control-lg, .input-group-lg > .form-control-static.form-control,
                    .input-group-lg > .form-control-static.input-group-addon,
                    .input-group-lg > .input-group-btn > .form-control-static.btn {
                        padding-right: 0;
                        padding-left: 0;
                    }

                    .form-control-sm, .input-group-sm > .form-control,
                    .input-group-sm > .input-group-addon,
                    .input-group-sm > .input-group-btn > .btn {
                        padding: 0.25rem 0.5rem;
                        font-size: 0.875rem;
                        border-radius: 0.2rem;
                    }

                    select.form-control-sm:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]),
                    .input-group-sm > select.input-group-addon:not([size]):not([multiple]),
                    .input-group-sm > .input-group-btn > select.btn:not([size]):not([multiple]) {
                        height: 1.8125rem;
                    }

                    .form-control-lg, .input-group-lg > .form-control,
                    .input-group-lg > .input-group-addon,
                    .input-group-lg > .input-group-btn > .btn {
                        padding: 0.75rem 1.5rem;
                        font-size: 1.25rem;
                        border-radius: 0.3rem;
                    }

                    select.form-control-lg:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]),
                    .input-group-lg > select.input-group-addon:not([size]):not([multiple]),
                    .input-group-lg > .input-group-btn > select.btn:not([size]):not([multiple]) {
                        height: 3.16667rem;
                    }

                    .form-group {
                        margin-bottom: 1rem;
                    }

                    .form-text {
                        display: block;
                        margin-top: 0.25rem;
                    }

                    .form-check {
                        position: relative;
                        display: block;
                        margin-bottom: 0.75rem;
                    }

                    .form-check + .form-check {
                        margin-top: -.25rem;
                    }

                    .form-check.disabled .form-check-label {
                        color: #818a91;
                        cursor: not-allowed;
                    }

                    .form-check-label {
                        padding-left: 1.25rem;
                        margin-bottom: 0;
                        cursor: pointer;
                    }

                    .form-check-input {
                        position: absolute;
                        margin-top: .25rem;
                        margin-left: -1.25rem;
                    }

                    .form-check-input:only-child {
                        position: static;
                    }

                    .form-check-inline {
                        position: relative;
                        display: inline-block;
                        padding-left: 1.25rem;
                        margin-bottom: 0;
                        vertical-align: middle;
                        cursor: pointer;
                    }

                    .form-check-inline + .form-check-inline {
                        margin-left: .75rem;
                    }

                    .form-check-inline.disabled {
                        color: #818a91;
                        cursor: not-allowed;
                    }

                    .form-control-feedback {
                        margin-top: 0.25rem;
                    }

                    .form-control-success,
                    .form-control-warning,
                    .form-control-danger {
                        padding-right: 2.25rem;
                        background-repeat: no-repeat;
                        background-position: center right 0.625rem;
                        background-size: 1.25rem 1.25rem;
                    }

                    .has-success .form-control-feedback,
                    .has-success .form-control-label,
                    .has-success .form-check-label,
                    .has-success .form-check-inline,
                    .has-success .custom-control {
                        color: #5cb85c;
                    }

                    .has-success .form-control {
                        border-color: #5cb85c;
                    }

                    .has-success .form-control:focus {
                        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #a3d7a3;
                    }

                    .has-success .input-group-addon {
                        color: #5cb85c;
                        border-color: #5cb85c;
                        background-color: #eaf6ea;
                    }

                    .has-success .form-control-success {
                        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='#5cb85c' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E");
                    }

                    .has-warning .form-control-feedback,
                    .has-warning .form-control-label,
                    .has-warning .form-check-label,
                    .has-warning .form-check-inline,
                    .has-warning .custom-control {
                        color: #f0ad4e;
                    }

                    .has-warning .form-control {
                        border-color: #f0ad4e;
                    }

                    .has-warning .form-control:focus {
                        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #f8d9ac;
                    }

                    .has-warning .input-group-addon {
                        color: #f0ad4e;
                        border-color: #f0ad4e;
                        background-color: white;
                    }

                    .has-warning .form-control-warning {
                        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='#f0ad4e' d='M4.4 5.324h-.8v-2.46h.8zm0 1.42h-.8V5.89h.8zM3.76.63L.04 7.075c-.115.2.016.425.26.426h7.397c.242 0 .372-.226.258-.426C6.726 4.924 5.47 2.79 4.253.63c-.113-.174-.39-.174-.494 0z'/%3E%3C/svg%3E");
                    }

                    .has-danger .form-control-feedback,
                    .has-danger .form-control-label,
                    .has-danger .form-check-label,
                    .has-danger .form-check-inline,
                    .has-danger .custom-control {
                        color: #d9534f;
                    }

                    .has-danger .form-control {
                        border-color: #d9534f;
                    }

                    .has-danger .form-control:focus {
                        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #eba5a3;
                    }

                    .has-danger .input-group-addon {
                        color: #d9534f;
                        border-color: #d9534f;
                        background-color: #fdf7f7;
                    }

                    .has-danger .form-control-danger {
                        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='#d9534f' viewBox='-2 -2 7 7'%3E%3Cpath stroke='%23d9534f' d='M0 0l3 3m0-3L0 3'/%3E%3Ccircle r='.5'/%3E%3Ccircle cx='3' r='.5'/%3E%3Ccircle cy='3' r='.5'/%3E%3Ccircle cx='3' cy='3' r='.5'/%3E%3C/svg%3E");
                    }

                    @media (min-width: 576px) {
                        .form-inline .form-group {
                            display: inline-block;
                            margin-bottom: 0;
                            vertical-align: middle;
                        }

                        .form-inline .form-control {
                            display: inline-block;
                            width: auto;
                            vertical-align: middle;
                        }

                        .form-inline .form-control-static {
                            display: inline-block;
                        }

                        .form-inline .input-group {
                            display: inline-table;
                            width: auto;
                            vertical-align: middle;
                        }

                        .form-inline .input-group .input-group-addon,
                        .form-inline .input-group .input-group-btn,
                        .form-inline .input-group .form-control {
                            width: auto;
                        }

                        .form-inline .input-group > .form-control {
                            width: 100%;
                        }

                        .form-inline .form-control-label {
                            margin-bottom: 0;
                            vertical-align: middle;
                        }

                        .form-inline .form-check {
                            display: inline-block;
                            margin-top: 0;
                            margin-bottom: 0;
                            vertical-align: middle;
                        }

                        .form-inline .form-check-label {
                            padding-left: 0;
                        }

                        .form-inline .form-check-input {
                            position: relative;
                            margin-left: 0;
                        }

                        .form-inline .has-feedback .form-control-feedback {
                            top: 0;
                        }
                    }

                    .btn {
                        display: inline-block;
                        font-weight: normal;
                        line-height: 1.25;
                        text-align: center;
                        white-space: nowrap;
                        vertical-align: middle;
                        cursor: pointer;
                        user-select: none;
                        border: 1px solid transparent;
                        padding: 0.5rem 1rem;
                        font-size: 1rem;
                        border-radius: 0.25rem;
                    }

                    .btn:focus, .btn.focus, .btn:active:focus, .btn:active.focus, .btn.active:focus, .btn.active.focus {
                        outline: 5px auto -webkit-focus-ring-color;
                        outline-offset: -2px;
                    }

                    .btn:focus, .btn:hover {
                        text-decoration: none;
                    }

                    .btn.focus {
                        text-decoration: none;
                    }

                    .btn:active, .btn.active {
                        background-image: none;
                        outline: 0;
                    }

                    .btn.disabled, .btn:disabled {
                        cursor: not-allowed;
                        opacity: .65;
                    }

                    a.btn.disabled,
                    fieldset[disabled] a.btn {
                        pointer-events: none;
                    }

                    .btn-primary {
                        color: #fff;
                        background-color: #0275d8;
                        border-color: #0275d8;
                    }

                    .btn-primary:hover {
                        color: #fff;
                        background-color: #025aa5;
                        border-color: #01549b;
                    }

                    .btn-primary:focus, .btn-primary.focus {
                        color: #fff;
                        background-color: #025aa5;
                        border-color: #01549b;
                    }

                    .btn-primary:active, .btn-primary.active,
                    .open > .btn-primary.dropdown-toggle {
                        color: #fff;
                        background-color: #025aa5;
                        border-color: #01549b;
                        background-image: none;
                    }

                    .btn-primary:active:hover, .btn-primary:active:focus, .btn-primary:active.focus, .btn-primary.active:hover, .btn-primary.active:focus, .btn-primary.active.focus,
                    .open > .btn-primary.dropdown-toggle:hover,
                    .open > .btn-primary.dropdown-toggle:focus,
                    .open > .btn-primary.dropdown-toggle.focus {
                        color: #fff;
                        background-color: #014682;
                        border-color: #01315a;
                    }

                    .btn-primary.disabled:focus, .btn-primary.disabled.focus, .btn-primary:disabled:focus, .btn-primary:disabled.focus {
                        background-color: #0275d8;
                        border-color: #0275d8;
                    }

                    .btn-primary.disabled:hover, .btn-primary:disabled:hover {
                        background-color: #0275d8;
                        border-color: #0275d8;
                    }

                    .btn-secondary {
                        color: #373a3c;
                        background-color: #fff;
                        border-color: #ccc;
                    }

                    .btn-secondary:hover {
                        color: #373a3c;
                        background-color: #e6e6e6;
                        border-color: #adadad;
                    }

                    .btn-secondary:focus, .btn-secondary.focus {
                        color: #373a3c;
                        background-color: #e6e6e6;
                        border-color: #adadad;
                    }

                    .btn-secondary:active, .btn-secondary.active,
                    .open > .btn-secondary.dropdown-toggle {
                        color: #373a3c;
                        background-color: #e6e6e6;
                        border-color: #adadad;
                        background-image: none;
                    }

                    .btn-secondary:active:hover, .btn-secondary:active:focus, .btn-secondary:active.focus, .btn-secondary.active:hover, .btn-secondary.active:focus, .btn-secondary.active.focus,
                    .open > .btn-secondary.dropdown-toggle:hover,
                    .open > .btn-secondary.dropdown-toggle:focus,
                    .open > .btn-secondary.dropdown-toggle.focus {
                        color: #373a3c;
                        background-color: #d4d4d4;
                        border-color: #8c8c8c;
                    }

                    .btn-secondary.disabled:focus, .btn-secondary.disabled.focus, .btn-secondary:disabled:focus, .btn-secondary:disabled.focus {
                        background-color: #fff;
                        border-color: #ccc;
                    }

                    .btn-secondary.disabled:hover, .btn-secondary:disabled:hover {
                        background-color: #fff;
                        border-color: #ccc;
                    }

                    .btn-info {
                        color: #fff;
                        background-color: #5bc0de;
                        border-color: #5bc0de;
                    }

                    .btn-info:hover {
                        color: #fff;
                        background-color: #31b0d5;
                        border-color: #2aabd2;
                    }

                    .btn-info:focus, .btn-info.focus {
                        color: #fff;
                        background-color: #31b0d5;
                        border-color: #2aabd2;
                    }

                    .btn-info:active, .btn-info.active,
                    .open > .btn-info.dropdown-toggle {
                        color: #fff;
                        background-color: #31b0d5;
                        border-color: #2aabd2;
                        background-image: none;
                    }

                    .btn-info:active:hover, .btn-info:active:focus, .btn-info:active.focus, .btn-info.active:hover, .btn-info.active:focus, .btn-info.active.focus,
                    .open > .btn-info.dropdown-toggle:hover,
                    .open > .btn-info.dropdown-toggle:focus,
                    .open > .btn-info.dropdown-toggle.focus {
                        color: #fff;
                        background-color: #269abc;
                        border-color: #1f7e9a;
                    }

                    .btn-info.disabled:focus, .btn-info.disabled.focus, .btn-info:disabled:focus, .btn-info:disabled.focus {
                        background-color: #5bc0de;
                        border-color: #5bc0de;
                    }

                    .btn-info.disabled:hover, .btn-info:disabled:hover {
                        background-color: #5bc0de;
                        border-color: #5bc0de;
                    }

                    .btn-success {
                        color: #fff;
                        background-color: #5cb85c;
                        border-color: #5cb85c;
                    }

                    .btn-success:hover {
                        color: #fff;
                        background-color: #449d44;
                        border-color: #419641;
                    }

                    .btn-success:focus, .btn-success.focus {
                        color: #fff;
                        background-color: #449d44;
                        border-color: #419641;
                    }

                    .btn-success:active, .btn-success.active,
                    .open > .btn-success.dropdown-toggle {
                        color: #fff;
                        background-color: #449d44;
                        border-color: #419641;
                        background-image: none;
                    }

                    .btn-success:active:hover, .btn-success:active:focus, .btn-success:active.focus, .btn-success.active:hover, .btn-success.active:focus, .btn-success.active.focus,
                    .open > .btn-success.dropdown-toggle:hover,
                    .open > .btn-success.dropdown-toggle:focus,
                    .open > .btn-success.dropdown-toggle.focus {
                        color: #fff;
                        background-color: #398439;
                        border-color: #2d672d;
                    }

                    .btn-success.disabled:focus, .btn-success.disabled.focus, .btn-success:disabled:focus, .btn-success:disabled.focus {
                        background-color: #5cb85c;
                        border-color: #5cb85c;
                    }

                    .btn-success.disabled:hover, .btn-success:disabled:hover {
                        background-color: #5cb85c;
                        border-color: #5cb85c;
                    }

                    .btn-warning {
                        color: #fff;
                        background-color: #f0ad4e;
                        border-color: #f0ad4e;
                    }

                    .btn-warning:hover {
                        color: #fff;
                        background-color: #ec971f;
                        border-color: #eb9316;
                    }

                    .btn-warning:focus, .btn-warning.focus {
                        color: #fff;
                        background-color: #ec971f;
                        border-color: #eb9316;
                    }

                    .btn-warning:active, .btn-warning.active,
                    .open > .btn-warning.dropdown-toggle {
                        color: #fff;
                        background-color: #ec971f;
                        border-color: #eb9316;
                        background-image: none;
                    }

                    .btn-warning:active:hover, .btn-warning:active:focus, .btn-warning:active.focus, .btn-warning.active:hover, .btn-warning.active:focus, .btn-warning.active.focus,
                    .open > .btn-warning.dropdown-toggle:hover,
                    .open > .btn-warning.dropdown-toggle:focus,
                    .open > .btn-warning.dropdown-toggle.focus {
                        color: #fff;
                        background-color: #d58512;
                        border-color: #b06d0f;
                    }

                    .btn-warning.disabled:focus, .btn-warning.disabled.focus, .btn-warning:disabled:focus, .btn-warning:disabled.focus {
                        background-color: #f0ad4e;
                        border-color: #f0ad4e;
                    }

                    .btn-warning.disabled:hover, .btn-warning:disabled:hover {
                        background-color: #f0ad4e;
                        border-color: #f0ad4e;
                    }

                    .btn-danger {
                        color: #fff;
                        background-color: #d9534f;
                        border-color: #d9534f;
                    }

                    .btn-danger:hover {
                        color: #fff;
                        background-color: #c9302c;
                        border-color: #c12e2a;
                    }

                    .btn-danger:focus, .btn-danger.focus {
                        color: #fff;
                        background-color: #c9302c;
                        border-color: #c12e2a;
                    }

                    .btn-danger:active, .btn-danger.active,
                    .open > .btn-danger.dropdown-toggle {
                        color: #fff;
                        background-color: #c9302c;
                        border-color: #c12e2a;
                        background-image: none;
                    }

                    .btn-danger:active:hover, .btn-danger:active:focus, .btn-danger:active.focus, .btn-danger.active:hover, .btn-danger.active:focus, .btn-danger.active.focus,
                    .open > .btn-danger.dropdown-toggle:hover,
                    .open > .btn-danger.dropdown-toggle:focus,
                    .open > .btn-danger.dropdown-toggle.focus {
                        color: #fff;
                        background-color: #ac2925;
                        border-color: #8b211e;
                    }

                    .btn-danger.disabled:focus, .btn-danger.disabled.focus, .btn-danger:disabled:focus, .btn-danger:disabled.focus {
                        background-color: #d9534f;
                        border-color: #d9534f;
                    }

                    .btn-danger.disabled:hover, .btn-danger:disabled:hover {
                        background-color: #d9534f;
                        border-color: #d9534f;
                    }

                    .btn-outline-primary {
                        color: #0275d8;
                        background-image: none;
                        background-color: transparent;
                        border-color: #0275d8;
                    }

                    .btn-outline-primary:hover {
                        color: #fff;
                        background-color: #0275d8;
                        border-color: #0275d8;
                    }

                    .btn-outline-primary:focus, .btn-outline-primary.focus {
                        color: #fff;
                        background-color: #0275d8;
                        border-color: #0275d8;
                    }

                    .btn-outline-primary:active, .btn-outline-primary.active,
                    .open > .btn-outline-primary.dropdown-toggle {
                        color: #fff;
                        background-color: #0275d8;
                        border-color: #0275d8;
                    }

                    .btn-outline-primary:active:hover, .btn-outline-primary:active:focus, .btn-outline-primary:active.focus, .btn-outline-primary.active:hover, .btn-outline-primary.active:focus, .btn-outline-primary.active.focus,
                    .open > .btn-outline-primary.dropdown-toggle:hover,
                    .open > .btn-outline-primary.dropdown-toggle:focus,
                    .open > .btn-outline-primary.dropdown-toggle.focus {
                        color: #fff;
                        background-color: #014682;
                        border-color: #01315a;
                    }

                    .btn-outline-primary.disabled:focus, .btn-outline-primary.disabled.focus, .btn-outline-primary:disabled:focus, .btn-outline-primary:disabled.focus {
                        border-color: #43a7fd;
                    }

                    .btn-outline-primary.disabled:hover, .btn-outline-primary:disabled:hover {
                        border-color: #43a7fd;
                    }

                    .btn-outline-secondary {
                        color: #ccc;
                        background-image: none;
                        background-color: transparent;
                        border-color: #ccc;
                    }

                    .btn-outline-secondary:hover {
                        color: #fff;
                        background-color: #ccc;
                        border-color: #ccc;
                    }

                    .btn-outline-secondary:focus, .btn-outline-secondary.focus {
                        color: #fff;
                        background-color: #ccc;
                        border-color: #ccc;
                    }

                    .btn-outline-secondary:active, .btn-outline-secondary.active,
                    .open > .btn-outline-secondary.dropdown-toggle {
                        color: #fff;
                        background-color: #ccc;
                        border-color: #ccc;
                    }

                    .btn-outline-secondary:active:hover, .btn-outline-secondary:active:focus, .btn-outline-secondary:active.focus, .btn-outline-secondary.active:hover, .btn-outline-secondary.active:focus, .btn-outline-secondary.active.focus,
                    .open > .btn-outline-secondary.dropdown-toggle:hover,
                    .open > .btn-outline-secondary.dropdown-toggle:focus,
                    .open > .btn-outline-secondary.dropdown-toggle.focus {
                        color: #fff;
                        background-color: #a1a1a1;
                        border-color: #8c8c8c;
                    }

                    .btn-outline-secondary.disabled:focus, .btn-outline-secondary.disabled.focus, .btn-outline-secondary:disabled:focus, .btn-outline-secondary:disabled.focus {
                        border-color: white;
                    }

                    .btn-outline-secondary.disabled:hover, .btn-outline-secondary:disabled:hover {
                        border-color: white;
                    }

                    .btn-outline-info {
                        color: #5bc0de;
                        background-image: none;
                        background-color: transparent;
                        border-color: #5bc0de;
                    }

                    .btn-outline-info:hover {
                        color: #fff;
                        background-color: #5bc0de;
                        border-color: #5bc0de;
                    }

                    .btn-outline-info:focus, .btn-outline-info.focus {
                        color: #fff;
                        background-color: #5bc0de;
                        border-color: #5bc0de;
                    }

                    .btn-outline-info:active, .btn-outline-info.active,
                    .open > .btn-outline-info.dropdown-toggle {
                        color: #fff;
                        background-color: #5bc0de;
                        border-color: #5bc0de;
                    }

                    .btn-outline-info:active:hover, .btn-outline-info:active:focus, .btn-outline-info:active.focus, .btn-outline-info.active:hover, .btn-outline-info.active:focus, .btn-outline-info.active.focus,
                    .open > .btn-outline-info.dropdown-toggle:hover,
                    .open > .btn-outline-info.dropdown-toggle:focus,
                    .open > .btn-outline-info.dropdown-toggle.focus {
                        color: #fff;
                        background-color: #269abc;
                        border-color: #1f7e9a;
                    }

                    .btn-outline-info.disabled:focus, .btn-outline-info.disabled.focus, .btn-outline-info:disabled:focus, .btn-outline-info:disabled.focus {
                        border-color: #b0e1ef;
                    }

                    .btn-outline-info.disabled:hover, .btn-outline-info:disabled:hover {
                        border-color: #b0e1ef;
                    }

                    .btn-outline-success {
                        color: #5cb85c;
                        background-image: none;
                        background-color: transparent;
                        border-color: #5cb85c;
                    }

                    .btn-outline-success:hover {
                        color: #fff;
                        background-color: #5cb85c;
                        border-color: #5cb85c;
                    }

                    .btn-outline-success:focus, .btn-outline-success.focus {
                        color: #fff;
                        background-color: #5cb85c;
                        border-color: #5cb85c;
                    }

                    .btn-outline-success:active, .btn-outline-success.active,
                    .open > .btn-outline-success.dropdown-toggle {
                        color: #fff;
                        background-color: #5cb85c;
                        border-color: #5cb85c;
                    }

                    .btn-outline-success:active:hover, .btn-outline-success:active:focus, .btn-outline-success:active.focus, .btn-outline-success.active:hover, .btn-outline-success.active:focus, .btn-outline-success.active.focus,
                    .open > .btn-outline-success.dropdown-toggle:hover,
                    .open > .btn-outline-success.dropdown-toggle:focus,
                    .open > .btn-outline-success.dropdown-toggle.focus {
                        color: #fff;
                        background-color: #398439;
                        border-color: #2d672d;
                    }

                    .btn-outline-success.disabled:focus, .btn-outline-success.disabled.focus, .btn-outline-success:disabled:focus, .btn-outline-success:disabled.focus {
                        border-color: #a3d7a3;
                    }

                    .btn-outline-success.disabled:hover, .btn-outline-success:disabled:hover {
                        border-color: #a3d7a3;
                    }

                    .btn-outline-warning {
                        color: #f0ad4e;
                        background-image: none;
                        background-color: transparent;
                        border-color: #f0ad4e;
                    }

                    .btn-outline-warning:hover {
                        color: #fff;
                        background-color: #f0ad4e;
                        border-color: #f0ad4e;
                    }

                    .btn-outline-warning:focus, .btn-outline-warning.focus {
                        color: #fff;
                        background-color: #f0ad4e;
                        border-color: #f0ad4e;
                    }

                    .btn-outline-warning:active, .btn-outline-warning.active,
                    .open > .btn-outline-warning.dropdown-toggle {
                        color: #fff;
                        background-color: #f0ad4e;
                        border-color: #f0ad4e;
                    }

                    .btn-outline-warning:active:hover, .btn-outline-warning:active:focus, .btn-outline-warning:active.focus, .btn-outline-warning.active:hover, .btn-outline-warning.active:focus, .btn-outline-warning.active.focus,
                    .open > .btn-outline-warning.dropdown-toggle:hover,
                    .open > .btn-outline-warning.dropdown-toggle:focus,
                    .open > .btn-outline-warning.dropdown-toggle.focus {
                        color: #fff;
                        background-color: #d58512;
                        border-color: #b06d0f;
                    }

                    .btn-outline-warning.disabled:focus, .btn-outline-warning.disabled.focus, .btn-outline-warning:disabled:focus, .btn-outline-warning:disabled.focus {
                        border-color: #f8d9ac;
                    }

                    .btn-outline-warning.disabled:hover, .btn-outline-warning:disabled:hover {
                        border-color: #f8d9ac;
                    }

                    .btn-outline-danger {
                        color: #d9534f;
                        background-image: none;
                        background-color: transparent;
                        border-color: #d9534f;
                    }

                    .btn-outline-danger:hover {
                        color: #fff;
                        background-color: #d9534f;
                        border-color: #d9534f;
                    }

                    .btn-outline-danger:focus, .btn-outline-danger.focus {
                        color: #fff;
                        background-color: #d9534f;
                        border-color: #d9534f;
                    }

                    .btn-outline-danger:active, .btn-outline-danger.active,
                    .open > .btn-outline-danger.dropdown-toggle {
                        color: #fff;
                        background-color: #d9534f;
                        border-color: #d9534f;
                    }

                    .btn-outline-danger:active:hover, .btn-outline-danger:active:focus, .btn-outline-danger:active.focus, .btn-outline-danger.active:hover, .btn-outline-danger.active:focus, .btn-outline-danger.active.focus,
                    .open > .btn-outline-danger.dropdown-toggle:hover,
                    .open > .btn-outline-danger.dropdown-toggle:focus,
                    .open > .btn-outline-danger.dropdown-toggle.focus {
                        color: #fff;
                        background-color: #ac2925;
                        border-color: #8b211e;
                    }

                    .btn-outline-danger.disabled:focus, .btn-outline-danger.disabled.focus, .btn-outline-danger:disabled:focus, .btn-outline-danger:disabled.focus {
                        border-color: #eba5a3;
                    }

                    .btn-outline-danger.disabled:hover, .btn-outline-danger:disabled:hover {
                        border-color: #eba5a3;
                    }

                    .btn-link {
                        font-weight: normal;
                        color: #0275d8;
                        border-radius: 0;
                    }

                    .btn-link, .btn-link:active, .btn-link.active, .btn-link:disabled {
                        background-color: transparent;
                    }

                    .btn-link, .btn-link:focus, .btn-link:active {
                        border-color: transparent;
                    }

                    .btn-link:hover {
                        border-color: transparent;
                    }

                    .btn-link:focus, .btn-link:hover {
                        color: #014c8c;
                        text-decoration: underline;
                        background-color: transparent;
                    }

                    .btn-link:disabled:focus, .btn-link:disabled:hover {
                        color: #818a91;
                        text-decoration: none;
                    }

                    .btn-lg, .btn-group-lg > .btn {
                        padding: 0.75rem 1.5rem;
                        font-size: 1.25rem;
                        border-radius: 0.3rem;
                    }

                    .btn-sm, .btn-group-sm > .btn {
                        padding: 0.25rem 0.5rem;
                        font-size: 0.875rem;
                        border-radius: 0.2rem;
                    }

                    .btn-block {
                        display: block;
                        width: 100%;
                    }

                    .btn-block + .btn-block {
                        margin-top: 0.5rem;
                    }

                    input[type="submit"].btn-block,
                    input[type="reset"].btn-block,
                    input[type="button"].btn-block {
                        width: 100%;
                    }

                    .fade {
                        opacity: 0;
                        transition: opacity .15s linear;
                    }

                    .fade.in {
                        opacity: 1;
                    }

                    .collapse {
                        display: none;
                    }

                    .collapse.in {
                        display: block;
                    }

                    tr.collapse.in {
                        display: table-row;
                    }

                    tbody.collapse.in {
                        display: table-row-group;
                    }

                    .collapsing {
                        position: relative;
                        height: 0;
                        overflow: hidden;
                        transition-timing-function: ease;
                        transition-duration: .35s;
                        transition-property: height;
                    }

                    .dropup,
                    .dropdown {
                        position: relative;
                    }

                    .dropdown-toggle::after {
                        display: inline-block;
                        width: 0;
                        height: 0;
                        margin-left: 0.3em;
                        vertical-align: middle;
                        content: "";
                        border-top: 0.3em solid;
                        border-right: 0.3em solid transparent;
                        border-left: 0.3em solid transparent;
                    }

                    .dropdown-toggle:focus {
                        outline: 0;
                    }

                    .dropup .dropdown-toggle::after {
                        border-top: 0;
                        border-bottom: 0.3em solid;
                    }

                    .dropdown-menu {
                        position: absolute;
                        top: 100%;
                        left: 0;
                        z-index: 1000;
                        display: none;
                        float: left;
                        min-width: 10rem;
                        padding: 0.5rem 0;
                        margin: 0.125rem 0 0;
                        font-size: 1rem;
                        color: #373a3c;
                        text-align: left;
                        list-style: none;
                        background-color: #fff;
                        background-clip: padding-box;
                        border: 1px solid rgba(0, 0, 0, 0.15);
                        border-radius: 0.25rem;
                    }

                    .dropdown-divider {
                        height: 1px;
                        margin: 0.5rem 0;
                        overflow: hidden;
                        background-color: #e5e5e5;
                    }

                    .dropdown-item {
                        display: block;
                        width: 100%;
                        padding: 3px 1.5rem;
                        clear: both;
                        font-weight: normal;
                        color: #373a3c;
                        text-align: inherit;
                        white-space: nowrap;
                        background: none;
                        border: 0;
                    }

                    .dropdown-item:focus, .dropdown-item:hover {
                        color: #2b2d2f;
                        text-decoration: none;
                        background-color: #f5f5f5;
                    }

                    .dropdown-item.active, .dropdown-item.active:focus, .dropdown-item.active:hover {
                        color: #fff;
                        text-decoration: none;
                        background-color: #0275d8;
                        outline: 0;
                    }

                    .dropdown-item.disabled, .dropdown-item.disabled:focus, .dropdown-item.disabled:hover {
                        color: #818a91;
                    }

                    .dropdown-item.disabled:focus, .dropdown-item.disabled:hover {
                        text-decoration: none;
                        cursor: not-allowed;
                        background-color: transparent;
                        background-image: none;
                        filter: "progid:DXImageTransform.Microsoft.gradient(enabled = false)";
                    }

                    .open > .dropdown-menu {
                        display: block;
                    }

                    .open > a {
                        outline: 0;
                    }

                    .dropdown-menu-right {
                        right: 0;
                        left: auto;
                    }

                    .dropdown-menu-left {
                        right: auto;
                        left: 0;
                    }

                    .dropdown-header {
                        display: block;
                        padding: 0.5rem 1.5rem;
                        margin-bottom: 0;
                        font-size: 0.875rem;
                        color: #818a91;
                        white-space: nowrap;
                    }

                    .dropdown-backdrop {
                        position: fixed;
                        top: 0;
                        right: 0;
                        bottom: 0;
                        left: 0;
                        z-index: 990;
                    }

                    .dropup .caret,
                    .navbar-fixed-bottom .dropdown .caret {
                        content: "";
                        border-top: 0;
                        border-bottom: 0.3em solid;
                    }

                    .dropup .dropdown-menu,
                    .navbar-fixed-bottom .dropdown .dropdown-menu {
                        top: auto;
                        bottom: 100%;
                        margin-bottom: 0.125rem;
                    }

                    .btn-group,
                    .btn-group-vertical {
                        position: relative;
                        display: inline-block;
                        vertical-align: middle;
                    }

                    .btn-group > .btn,
                    .btn-group-vertical > .btn {
                        position: relative;
                        float: left;
                        margin-bottom: 0;
                    }

                    .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
                    .btn-group-vertical > .btn:focus,
                    .btn-group-vertical > .btn:active,
                    .btn-group-vertical > .btn.active {
                        z-index: 2;
                    }

                    .btn-group > .btn:hover,
                    .btn-group-vertical > .btn:hover {
                        z-index: 2;
                    }

                    .btn-group .btn + .btn,
                    .btn-group .btn + .btn-group,
                    .btn-group .btn-group + .btn,
                    .btn-group .btn-group + .btn-group {
                        margin-left: -1px;
                    }

                    .btn-toolbar {
                        margin-left: -0.5rem;
                    }

                    .btn-toolbar::after {
                        content: "";
                        display: table;
                        clear: both;
                    }

                    .btn-toolbar .btn-group,
                    .btn-toolbar .input-group {
                        float: left;
                    }

                    .btn-toolbar > .btn,
                    .btn-toolbar > .btn-group,
                    .btn-toolbar > .input-group {
                        margin-left: 0.5rem;
                    }

                    .btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
                        border-radius: 0;
                    }

                    .btn-group > .btn:first-child {
                        margin-left: 0;
                    }

                    .btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
                        border-bottom-right-radius: 0;
                        border-top-right-radius: 0;
                    }

                    .btn-group > .btn:last-child:not(:first-child),
                    .btn-group > .dropdown-toggle:not(:first-child) {
                        border-bottom-left-radius: 0;
                        border-top-left-radius: 0;
                    }

                    .btn-group > .btn-group {
                        float: left;
                    }

                    .btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
                        border-radius: 0;
                    }

                    .btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
                    .btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
                        border-bottom-right-radius: 0;
                        border-top-right-radius: 0;
                    }

                    .btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
                        border-bottom-left-radius: 0;
                        border-top-left-radius: 0;
                    }

                    .btn-group .dropdown-toggle:active,
                    .btn-group.open .dropdown-toggle {
                        outline: 0;
                    }

                    .btn + .dropdown-toggle-split {
                        padding-right: 0.75rem;
                        padding-left: 0.75rem;
                    }

                    .btn + .dropdown-toggle-split::after {
                        margin-left: 0;
                    }

                    .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
                        padding-right: 0.375rem;
                        padding-left: 0.375rem;
                    }

                    .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
                        padding-right: 1.125rem;
                        padding-left: 1.125rem;
                    }

                    .btn .caret {
                        margin-left: 0;
                    }

                    .btn-lg .caret, .btn-group-lg > .btn .caret {
                        border-width: 0.3em 0.3em 0;
                        border-bottom-width: 0;
                    }

                    .dropup .btn-lg .caret, .dropup .btn-group-lg > .btn .caret {
                        border-width: 0 0.3em 0.3em;
                    }

                    .btn-group-vertical > .btn,
                    .btn-group-vertical > .btn-group,
                    .btn-group-vertical > .btn-group > .btn {
                        display: block;
                        float: none;
                        width: 100%;
                        max-width: 100%;
                    }

                    .btn-group-vertical > .btn-group::after {
                        content: "";
                        display: table;
                        clear: both;
                    }

                    .btn-group-vertical > .btn-group > .btn {
                        float: none;
                    }

                    .btn-group-vertical > .btn + .btn,
                    .btn-group-vertical > .btn + .btn-group,
                    .btn-group-vertical > .btn-group + .btn,
                    .btn-group-vertical > .btn-group + .btn-group {
                        margin-top: -1px;
                        margin-left: 0;
                    }

                    .btn-group-vertical > .btn:not(:first-child):not(:last-child) {
                        border-radius: 0;
                    }

                    .btn-group-vertical > .btn:first-child:not(:last-child) {
                        border-bottom-right-radius: 0;
                        border-bottom-left-radius: 0;
                    }

                    .btn-group-vertical > .btn:last-child:not(:first-child) {
                        border-top-right-radius: 0;
                        border-top-left-radius: 0;
                    }

                    .btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
                        border-radius: 0;
                    }

                    .btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
                    .btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
                        border-bottom-right-radius: 0;
                        border-bottom-left-radius: 0;
                    }

                    .btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
                        border-top-right-radius: 0;
                        border-top-left-radius: 0;
                    }

                    [data-toggle="buttons"] > .btn input[type="radio"],
                    [data-toggle="buttons"] > .btn input[type="checkbox"],
                    [data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
                    [data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
                        position: absolute;
                        clip: rect(0, 0, 0, 0);
                        pointer-events: none;
                    }

                    .input-group {
                        position: relative;
                        width: 100%;
                        display: flex;
                    }

                    .input-group .form-control {
                        position: relative;
                        z-index: 2;
                        flex: 1;
                        margin-bottom: 0;
                    }

                    .input-group .form-control:focus, .input-group .form-control:active, .input-group .form-control:hover {
                        z-index: 3;
                    }

                    .input-group-addon:not(:first-child):not(:last-child),
                    .input-group-btn:not(:first-child):not(:last-child),
                    .input-group .form-control:not(:first-child):not(:last-child) {
                        border-radius: 0;
                    }

                    .input-group-addon,
                    .input-group-btn {
                        white-space: nowrap;
                        vertical-align: middle;
                    }

                    .input-group-addon {
                        padding: 0.5rem 0.75rem;
                        margin-bottom: 0;
                        font-size: 1rem;
                        font-weight: normal;
                        line-height: 1.25;
                        color: #55595c;
                        text-align: center;
                        background-color: #eceeef;
                        border: 1px solid rgba(0, 0, 0, 0.15);
                        border-radius: 0.25rem;
                    }

                    .input-group-addon.form-control-sm,
                    .input-group-sm > .input-group-addon,
                    .input-group-sm > .input-group-btn > .input-group-addon.btn {
                        padding: 0.25rem 0.5rem;
                        font-size: 0.875rem;
                        border-radius: 0.2rem;
                    }

                    .input-group-addon.form-control-lg,
                    .input-group-lg > .input-group-addon,
                    .input-group-lg > .input-group-btn > .input-group-addon.btn {
                        padding: 0.75rem 1.5rem;
                        font-size: 1.25rem;
                        border-radius: 0.3rem;
                    }

                    .input-group-addon input[type="radio"],
                    .input-group-addon input[type="checkbox"] {
                        margin-top: 0;
                    }

                    .input-group .form-control:not(:last-child),
                    .input-group-addon:not(:last-child),
                    .input-group-btn:not(:last-child) > .btn,
                    .input-group-btn:not(:last-child) > .btn-group > .btn,
                    .input-group-btn:not(:last-child) > .dropdown-toggle,
                    .input-group-btn:not(:first-child) > .btn:not(:last-child):not(.dropdown-toggle),
                    .input-group-btn:not(:first-child) > .btn-group:not(:last-child) > .btn {
                        border-bottom-right-radius: 0;
                        border-top-right-radius: 0;
                    }

                    .input-group-addon:not(:last-child) {
                        border-right: 0;
                    }

                    .input-group .form-control:not(:first-child),
                    .input-group-addon:not(:first-child),
                    .input-group-btn:not(:first-child) > .btn,
                    .input-group-btn:not(:first-child) > .btn-group > .btn,
                    .input-group-btn:not(:first-child) > .dropdown-toggle,
                    .input-group-btn:not(:last-child) > .btn:not(:first-child),
                    .input-group-btn:not(:last-child) > .btn-group:not(:first-child) > .btn {
                        border-bottom-left-radius: 0;
                        border-top-left-radius: 0;
                    }

                    .form-control + .input-group-addon:not(:first-child) {
                        border-left: 0;
                    }

                    .input-group-btn {
                        position: relative;
                        font-size: 0;
                        white-space: nowrap;
                    }

                    .input-group-btn > .btn {
                        position: relative;
                    }

                    .input-group-btn > .btn + .btn {
                        margin-left: -1px;
                    }

                    .input-group-btn > .btn:focus, .input-group-btn > .btn:active, .input-group-btn > .btn:hover {
                        z-index: 3;
                    }

                    .input-group-btn:not(:last-child) > .btn,
                    .input-group-btn:not(:last-child) > .btn-group {
                        margin-right: -1px;
                    }

                    .input-group-btn:not(:first-child) > .btn,
                    .input-group-btn:not(:first-child) > .btn-group {
                        z-index: 2;
                        margin-left: -1px;
                    }

                    .input-group-btn:not(:first-child) > .btn:focus, .input-group-btn:not(:first-child) > .btn:active, .input-group-btn:not(:first-child) > .btn:hover,
                    .input-group-btn:not(:first-child) > .btn-group:focus,
                    .input-group-btn:not(:first-child) > .btn-group:active,
                    .input-group-btn:not(:first-child) > .btn-group:hover {
                        z-index: 3;
                    }

                    .custom-control {
                        position: relative;
                        display: inline-block;
                        padding-left: 1.5rem;
                        cursor: pointer;
                    }

                    .custom-control + .custom-control {
                        margin-left: 1rem;
                    }

                    .custom-control-input {
                        position: absolute;
                        z-index: -1;
                        opacity: 0;
                    }

                    .custom-control-input:checked ~ .custom-control-indicator {
                        color: #fff;
                        background-color: #0074d9;
                    }

                    .custom-control-input:focus ~ .custom-control-indicator {
                        box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.2rem #0074d9;
                    }

                    .custom-control-input:active ~ .custom-control-indicator {
                        color: #fff;
                        background-color: #84c6ff;
                    }

                    .custom-control-input:disabled ~ .custom-control-indicator {
                        cursor: not-allowed;
                        background-color: #eee;
                    }

                    .custom-control-input:disabled ~ .custom-control-description {
                        color: #767676;
                        cursor: not-allowed;
                    }

                    .custom-control-indicator {
                        position: absolute;
                        top: .25rem;
                        left: 0;
                        display: block;
                        width: 1rem;
                        height: 1rem;
                        pointer-events: none;
                        user-select: none;
                        background-color: #ddd;
                        background-repeat: no-repeat;
                        background-position: center center;
                        background-size: 50% 50%;
                    }

                    .custom-checkbox .custom-control-indicator {
                        border-radius: 0.25rem;
                    }

                    .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator {
                        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='#fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
                    }

                    .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-indicator {
                        background-color: #0074d9;
                        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='#fff' d='M0 2h4'/%3E%3C/svg%3E");
                    }

                    .custom-radio .custom-control-indicator {
                        border-radius: 50%;
                    }

                    .custom-radio .custom-control-input:checked ~ .custom-control-indicator {
                        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='#fff'/%3E%3C/svg%3E");
                    }

                    .custom-controls-stacked .custom-control {
                        float: left;
                        clear: left;
                    }

                    .custom-controls-stacked .custom-control + .custom-control {
                        margin-left: 0;
                    }

                    .custom-select {
                        display: inline-block;
                        max-width: 100%;
                        height: calc(2.5rem - 2px);
                        padding: 0.375rem 1.75rem 0.375rem 0.75rem;
                        padding-right: 0.75rem \9;
                        color: #55595c;
                        vertical-align: middle;
                        background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='#333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
                        background-image: none \9;
                        background-size: 8px 10px;
                        border: 1px solid rgba(0, 0, 0, 0.15);
                        border-radius: 0.25rem;
                        -moz-appearance: none;
                        -webkit-appearance: none;
                    }

                    .custom-select:focus {
                        border-color: #51a7e8;
                        outline: none;
                    }

                    .custom-select:focus::-ms-value {
                        color: #55595c;
                        background-color: #fff;
                    }

                    .custom-select:disabled {
                        color: #818a91;
                        cursor: not-allowed;
                        background-color: #eceeef;
                    }

                    .custom-select::-ms-expand {
                        opacity: 0;
                    }

                    .custom-select-sm {
                        padding-top: 0.375rem;
                        padding-bottom: 0.375rem;
                        font-size: 75%;
                    }

                    .custom-file {
                        position: relative;
                        display: inline-block;
                        max-width: 100%;
                        height: 2.5rem;
                        cursor: pointer;
                    }

                    .custom-file-input {
                        min-width: 14rem;
                        max-width: 100%;
                        margin: 0;
                        filter: alpha(opacity=0);
                        opacity: 0;
                    }

                    .custom-file-control {
                        position: absolute;
                        top: 0;
                        right: 0;
                        left: 0;
                        z-index: 5;
                        height: 2.5rem;
                        padding: 0.5rem 1rem;
                        line-height: 1.5;
                        color: #555;
                        user-select: none;
                        background-color: #fff;
                        border: 1px solid #ddd;
                        border-radius: 0.25rem;
                    }

                    .custom-file-control:lang(en)::after {
                        content: "Choose file...";
                    }

                    .custom-file-control::before {
                        position: absolute;
                        top: -1px;
                        right: -1px;
                        bottom: -1px;
                        z-index: 6;
                        display: block;
                        height: 2.5rem;
                        padding: 0.5rem 1rem;
                        line-height: 1.5;
                        color: #555;
                        background-color: #eee;
                        border: 1px solid #ddd;
                        border-radius: 0 0.25rem 0.25rem 0;
                    }

                    .custom-file-control:lang(en)::before {
                        content: "Browse";
                    }

                    .breadcrumb {
                        padding: 0.75rem 1rem;
                        margin-bottom: 1rem;
                        list-style: none;
                        background-color: #eceeef;
                        border-radius: 0.25rem;
                    }

                    .breadcrumb::after {
                        content: "";
                        display: table;
                        clear: both;
                    }

                    .breadcrumb-item {
                        float: left;
                    }

                    .breadcrumb-item + .breadcrumb-item::before {
                        display: inline-block;
                        padding-right: 0.5rem;
                        padding-left: 0.5rem;
                        color: #818a91;
                        content: "/";
                    }

                    .breadcrumb-item + .breadcrumb-item:hover::before {
                        text-decoration: underline;
                    }

                    .breadcrumb-item + .breadcrumb-item:hover::before {
                        text-decoration: none;
                    }

                    .breadcrumb-item.active {
                        color: #818a91;
                    }

                    .pagination {
                        display: inline-block;
                        padding-left: 0;
                        margin-top: 1rem;
                        margin-bottom: 1rem;
                        border-radius: 0.25rem;
                    }

                    .page-item {
                        display: inline;
                    }

                    .page-item:first-child .page-link {
                        margin-left: 0;
                        border-bottom-left-radius: 0.25rem;
                        border-top-left-radius: 0.25rem;
                    }

                    .page-item:last-child .page-link {
                        border-bottom-right-radius: 0.25rem;
                        border-top-right-radius: 0.25rem;
                    }

                    .page-item.active .page-link, .page-item.active .page-link:focus, .page-item.active .page-link:hover {
                        z-index: 2;
                        color: #fff;
                        cursor: default;
                        background-color: #0275d8;
                        border-color: #0275d8;
                    }

                    .page-item.disabled .page-link, .page-item.disabled .page-link:focus, .page-item.disabled .page-link:hover {
                        color: #818a91;
                        pointer-events: none;
                        cursor: not-allowed;
                        background-color: #fff;
                        border-color: #ddd;
                    }

                    .page-link {
                        position: relative;
                        float: left;
                        padding: 0.5rem 0.75rem;
                        margin-left: -1px;
                        color: #0275d8;
                        text-decoration: none;
                        background-color: #fff;
                        border: 1px solid #ddd;
                    }

                    .page-link:focus, .page-link:hover {
                        color: #014c8c;
                        background-color: #eceeef;
                        border-color: #ddd;
                    }

                    .pagination-lg .page-link {
                        padding: 0.75rem 1.5rem;
                        font-size: 1.25rem;
                    }

                    .pagination-lg .page-item:first-child .page-link {
                        border-bottom-left-radius: 0.3rem;
                        border-top-left-radius: 0.3rem;
                    }

                    .pagination-lg .page-item:last-child .page-link {
                        border-bottom-right-radius: 0.3rem;
                        border-top-right-radius: 0.3rem;
                    }

                    .pagination-sm .page-link {
                        padding: 0.275rem 0.75rem;
                        font-size: 0.875rem;
                    }

                    .pagination-sm .page-item:first-child .page-link {
                        border-bottom-left-radius: 0.2rem;
                        border-top-left-radius: 0.2rem;
                    }

                    .pagination-sm .page-item:last-child .page-link {
                        border-bottom-right-radius: 0.2rem;
                        border-top-right-radius: 0.2rem;
                    }

                    .tag {
                        display: inline-block;
                        padding: 0.25em 0.4em;
                        font-size: 75%;
                        font-weight: bold;
                        line-height: 1;
                        color: #fff;
                        text-align: center;
                        white-space: nowrap;
                        vertical-align: baseline;
                        border-radius: 0.25rem;
                    }

                    .tag:empty {
                        display: none;
                    }

                    .btn .tag {
                        position: relative;
                        top: -1px;
                    }

                    a.tag:focus, a.tag:hover {
                        color: #fff;
                        text-decoration: none;
                        cursor: pointer;
                    }

                    .tag-pill {
                        padding-right: 0.6em;
                        padding-left: 0.6em;
                        border-radius: 10rem;
                    }

                    .tag-default {
                        background-color: #818a91;
                    }

                    .tag-default[href]:focus, .tag-default[href]:hover {
                        background-color: #687077;
                    }

                    .tag-primary {
                        background-color: #0275d8;
                    }

                    .tag-primary[href]:focus, .tag-primary[href]:hover {
                        background-color: #025aa5;
                    }

                    .tag-success {
                        background-color: #5cb85c;
                    }

                    .tag-success[href]:focus, .tag-success[href]:hover {
                        background-color: #449d44;
                    }

                    .tag-info {
                        background-color: #5bc0de;
                    }

                    .tag-info[href]:focus, .tag-info[href]:hover {
                        background-color: #31b0d5;
                    }

                    .tag-warning {
                        background-color: #f0ad4e;
                    }

                    .tag-warning[href]:focus, .tag-warning[href]:hover {
                        background-color: #ec971f;
                    }

                    .tag-danger {
                        background-color: #d9534f;
                    }

                    .tag-danger[href]:focus, .tag-danger[href]:hover {
                        background-color: #c9302c;
                    }

                    .alert {
                        padding: 0.75rem 1.25rem;
                        margin-bottom: 1rem;
                        border: 1px solid transparent;
                        border-radius: 0.25rem;
                    }

                    .alert-heading {
                        color: inherit;
                    }

                    .alert-link {
                        font-weight: bold;
                    }

                    .alert-dismissible {
                        padding-right: 2.5rem;
                    }

                    .alert-dismissible .close {
                        position: relative;
                        top: -.125rem;
                        right: -1.25rem;
                        color: inherit;
                    }

                    .alert-success {
                        background-color: #dff0d8;
                        border-color: #d0e9c6;
                        color: #3c763d;
                    }

                    .alert-success hr {
                        border-top-color: #c1e2b3;
                    }

                    .alert-success .alert-link {
                        color: #2b542c;
                    }

                    .alert-info {
                        background-color: #d9edf7;
                        border-color: #bcdff1;
                        color: #31708f;
                    }

                    .alert-info hr {
                        border-top-color: #a6d5ec;
                    }

                    .alert-info .alert-link {
                        color: #245269;
                    }

                    .alert-warning {
                        background-color: #fcf8e3;
                        border-color: #faf2cc;
                        color: #8a6d3b;
                    }

                    .alert-warning hr {
                        border-top-color: #f7ecb5;
                    }

                    .alert-warning .alert-link {
                        color: #66512c;
                    }

                    .alert-danger {
                        background-color: #f2dede;
                        border-color: #ebcccc;
                        color: #a94442;
                    }

                    .alert-danger hr {
                        border-top-color: #e4b9b9;
                    }

                    .alert-danger .alert-link {
                        color: #843534;
                    }

                    @keyframes progress-bar-stripes {
                        from {
                            background-position: 1rem 0;
                        }
                        to {
                            background-position: 0 0;
                        }
                    }

                    .progress {
                        display: block;
                        width: 100%;
                        height: 1rem;
                        margin-bottom: 1rem;
                    }

                    .progress[value] {
                        background-color: #eee;
                        border: 0;
                        appearance: none;
                        border-radius: 0.25rem;
                    }

                    .progress[value]::-ms-fill {
                        background-color: #0074d9;
                        border: 0;
                    }

                    .progress[value]::-moz-progress-bar {
                        background-color: #0074d9;
                        border-bottom-left-radius: 0.25rem;
                        border-top-left-radius: 0.25rem;
                    }

                    .progress[value]::-webkit-progress-value {
                        background-color: #0074d9;
                        border-bottom-left-radius: 0.25rem;
                        border-top-left-radius: 0.25rem;
                    }

                    .progress[value="100"]::-moz-progress-bar {
                        border-bottom-right-radius: 0.25rem;
                        border-top-right-radius: 0.25rem;
                    }

                    .progress[value="100"]::-webkit-progress-value {
                        border-bottom-right-radius: 0.25rem;
                        border-top-right-radius: 0.25rem;
                    }

                    .progress[value]::-webkit-progress-bar {
                        background-color: #eee;
                        border-radius: 0.25rem;
                    }

                    base::-moz-progress-bar,
                    .progress[value] {
                        background-color: #eee;
                        border-radius: 0.25rem;
                    }

                    @media screen and (min-width: 0\0
                    ) {
                        .progress {
                            background-color: #eee;
                            border-radius: 0.25rem;
                        }

                        .progress-bar {
                            display: inline-block;
                            height: 1rem;
                            text-indent: -999rem;
                            background-color: #0074d9;
                            border-bottom-left-radius: 0.25rem;
                            border-top-left-radius: 0.25rem;
                        }

                        .progress[width="100%"] {
                            border-bottom-right-radius: 0.25rem;
                            border-top-right-radius: 0.25rem;
                        }
                    }

                    .progress-striped[value]::-webkit-progress-value {
                        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
                        background-size: 1rem 1rem;
                    }

                    .progress-striped[value]::-moz-progress-bar {
                        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
                        background-size: 1rem 1rem;
                    }

                    .progress-striped[value]::-ms-fill {
                        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
                        background-size: 1rem 1rem;
                    }

                    @media screen and (min-width: 0\0
                    ) {
                        .progress-bar-striped {
                            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
                            background-size: 1rem 1rem;
                        }
                    }

                    .progress-animated[value]::-webkit-progress-value {
                        animation: progress-bar-stripes 2s linear infinite;
                    }

                    .progress-animated[value]::-moz-progress-bar {
                        animation: progress-bar-stripes 2s linear infinite;
                    }

                    @media screen and (min-width: 0\0
                    ) {
                        .progress-animated .progress-bar-striped {
                            animation: progress-bar-stripes 2s linear infinite;
                        }
                    }

                    .progress-success[value]::-webkit-progress-value {
                        background-color: #5cb85c;
                    }

                    .progress-success[value]::-moz-progress-bar {
                        background-color: #5cb85c;
                    }

                    .progress-success[value]::-ms-fill {
                        background-color: #5cb85c;
                    }

                    @media screen and (min-width: 0\0
                    ) {
                        .progress-success .progress-bar {
                            background-color: #5cb85c;
                        }
                    }

                    .progress-info[value]::-webkit-progress-value {
                        background-color: #5bc0de;
                    }

                    .progress-info[value]::-moz-progress-bar {
                        background-color: #5bc0de;
                    }

                    .progress-info[value]::-ms-fill {
                        background-color: #5bc0de;
                    }

                    @media screen and (min-width: 0\0
                    ) {
                        .progress-info .progress-bar {
                            background-color: #5bc0de;
                        }
                    }

                    .progress-warning[value]::-webkit-progress-value {
                        background-color: #f0ad4e;
                    }

                    .progress-warning[value]::-moz-progress-bar {
                        background-color: #f0ad4e;
                    }

                    .progress-warning[value]::-ms-fill {
                        background-color: #f0ad4e;
                    }

                    @media screen and (min-width: 0\0
                    ) {
                        .progress-warning .progress-bar {
                            background-color: #f0ad4e;
                        }
                    }

                    .progress-danger[value]::-webkit-progress-value {
                        background-color: #d9534f;
                    }

                    .progress-danger[value]::-moz-progress-bar {
                        background-color: #d9534f;
                    }

                    .progress-danger[value]::-ms-fill {
                        background-color: #d9534f;
                    }

                    @media screen and (min-width: 0\0
                    ) {
                        .progress-danger .progress-bar {
                            background-color: #d9534f;
                        }
                    }

                    .media {
                        display: flex;
                    }

                    .media-body {
                        flex: 1;
                    }

                    .media-middle {
                        align-self: center;
                    }

                    .media-bottom {
                        align-self: flex-end;
                    }

                    .media-object {
                        display: block;
                    }

                    .media-object.img-thumbnail {
                        max-width: none;
                    }

                    .media-right {
                        padding-left: 10px;
                    }

                    .media-left {
                        padding-right: 10px;
                    }

                    .media-heading {
                        margin-top: 0;
                        margin-bottom: 5px;
                    }

                    .media-list {
                        padding-left: 0;
                        list-style: none;
                    }

                    .list-group {
                        padding-left: 0;
                        margin-bottom: 0;
                    }

                    .list-group-item {
                        position: relative;
                        display: block;
                        padding: 0.75rem 1.25rem;
                        margin-bottom: -1px;
                        background-color: #fff;
                        border: 1px solid #ddd;
                    }

                    .list-group-item:first-child {
                        border-top-right-radius: 0.25rem;
                        border-top-left-radius: 0.25rem;
                    }

                    .list-group-item:last-child {
                        margin-bottom: 0;
                        border-bottom-right-radius: 0.25rem;
                        border-bottom-left-radius: 0.25rem;
                    }

                    .list-group-item.disabled, .list-group-item.disabled:focus, .list-group-item.disabled:hover {
                        color: #818a91;
                        cursor: not-allowed;
                        background-color: #eceeef;
                    }

                    .list-group-item.disabled .list-group-item-heading, .list-group-item.disabled:focus .list-group-item-heading, .list-group-item.disabled:hover .list-group-item-heading {
                        color: inherit;
                    }

                    .list-group-item.disabled .list-group-item-text, .list-group-item.disabled:focus .list-group-item-text, .list-group-item.disabled:hover .list-group-item-text {
                        color: #818a91;
                    }

                    .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
                        z-index: 2;
                        color: #fff;
                        text-decoration: none;
                        background-color: #0275d8;
                        border-color: #0275d8;
                    }

                    .list-group-item.active .list-group-item-heading,
                    .list-group-item.active .list-group-item-heading > small,
                    .list-group-item.active .list-group-item-heading > .small, .list-group-item.active:focus .list-group-item-heading,
                    .list-group-item.active:focus .list-group-item-heading > small,
                    .list-group-item.active:focus .list-group-item-heading > .small, .list-group-item.active:hover .list-group-item-heading,
                    .list-group-item.active:hover .list-group-item-heading > small,
                    .list-group-item.active:hover .list-group-item-heading > .small {
                        color: inherit;
                    }

                    .list-group-item.active .list-group-item-text, .list-group-item.active:focus .list-group-item-text, .list-group-item.active:hover .list-group-item-text {
                        color: #a8d6fe;
                    }

                    .list-group-flush .list-group-item {
                        border-right: 0;
                        border-left: 0;
                        border-radius: 0;
                    }

                    .list-group-item-action {
                        width: 100%;
                        color: #555;
                        text-align: inherit;
                    }

                    .list-group-item-action .list-group-item-heading {
                        color: #333;
                    }

                    .list-group-item-action:focus, .list-group-item-action:hover {
                        color: #555;
                        text-decoration: none;
                        background-color: #f5f5f5;
                    }

                    .list-group-item-success {
                        color: #3c763d;
                        background-color: #dff0d8;
                    }

                    a.list-group-item-success,
                    button.list-group-item-success {
                        color: #3c763d;
                    }

                    a.list-group-item-success .list-group-item-heading,
                    button.list-group-item-success .list-group-item-heading {
                        color: inherit;
                    }

                    a.list-group-item-success:focus, a.list-group-item-success:hover,
                    button.list-group-item-success:focus,
                    button.list-group-item-success:hover {
                        color: #3c763d;
                        background-color: #d0e9c6;
                    }

                    a.list-group-item-success.active, a.list-group-item-success.active:focus, a.list-group-item-success.active:hover,
                    button.list-group-item-success.active,
                    button.list-group-item-success.active:focus,
                    button.list-group-item-success.active:hover {
                        color: #fff;
                        background-color: #3c763d;
                        border-color: #3c763d;
                    }

                    .list-group-item-info {
                        color: #31708f;
                        background-color: #d9edf7;
                    }

                    a.list-group-item-info,
                    button.list-group-item-info {
                        color: #31708f;
                    }

                    a.list-group-item-info .list-group-item-heading,
                    button.list-group-item-info .list-group-item-heading {
                        color: inherit;
                    }

                    a.list-group-item-info:focus, a.list-group-item-info:hover,
                    button.list-group-item-info:focus,
                    button.list-group-item-info:hover {
                        color: #31708f;
                        background-color: #c4e3f3;
                    }

                    a.list-group-item-info.active, a.list-group-item-info.active:focus, a.list-group-item-info.active:hover,
                    button.list-group-item-info.active,
                    button.list-group-item-info.active:focus,
                    button.list-group-item-info.active:hover {
                        color: #fff;
                        background-color: #31708f;
                        border-color: #31708f;
                    }

                    .list-group-item-warning {
                        color: #8a6d3b;
                        background-color: #fcf8e3;
                    }

                    a.list-group-item-warning,
                    button.list-group-item-warning {
                        color: #8a6d3b;
                    }

                    a.list-group-item-warning .list-group-item-heading,
                    button.list-group-item-warning .list-group-item-heading {
                        color: inherit;
                    }

                    a.list-group-item-warning:focus, a.list-group-item-warning:hover,
                    button.list-group-item-warning:focus,
                    button.list-group-item-warning:hover {
                        color: #8a6d3b;
                        background-color: #faf2cc;
                    }

                    a.list-group-item-warning.active, a.list-group-item-warning.active:focus, a.list-group-item-warning.active:hover,
                    button.list-group-item-warning.active,
                    button.list-group-item-warning.active:focus,
                    button.list-group-item-warning.active:hover {
                        color: #fff;
                        background-color: #8a6d3b;
                        border-color: #8a6d3b;
                    }

                    .list-group-item-danger {
                        color: #a94442;
                        background-color: #f2dede;
                    }

                    a.list-group-item-danger,
                    button.list-group-item-danger {
                        color: #a94442;
                    }

                    a.list-group-item-danger .list-group-item-heading,
                    button.list-group-item-danger .list-group-item-heading {
                        color: inherit;
                    }

                    a.list-group-item-danger:focus, a.list-group-item-danger:hover,
                    button.list-group-item-danger:focus,
                    button.list-group-item-danger:hover {
                        color: #a94442;
                        background-color: #ebcccc;
                    }

                    a.list-group-item-danger.active, a.list-group-item-danger.active:focus, a.list-group-item-danger.active:hover,
                    button.list-group-item-danger.active,
                    button.list-group-item-danger.active:focus,
                    button.list-group-item-danger.active:hover {
                        color: #fff;
                        background-color: #a94442;
                        border-color: #a94442;
                    }

                    .list-group-item-heading {
                        margin-top: 0;
                        margin-bottom: 5px;
                    }

                    .list-group-item-text {
                        margin-bottom: 0;
                        line-height: 1.3;
                    }

                    .embed-responsive {
                        position: relative;
                        display: block;
                        height: 0;
                        padding: 0;
                        overflow: hidden;
                    }

                    .embed-responsive .embed-responsive-item,
                    .embed-responsive iframe,
                    .embed-responsive embed,
                    .embed-responsive object,
                    .embed-responsive video {
                        position: absolute;
                        top: 0;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border: 0;
                    }

                    .embed-responsive-21by9 {
                        padding-bottom: 42.85714%;
                    }

                    .embed-responsive-16by9 {
                        padding-bottom: 56.25%;
                    }

                    .embed-responsive-4by3 {
                        padding-bottom: 75%;
                    }

                    .embed-responsive-1by1 {
                        padding-bottom: 100%;
                    }

                    .close {
                        float: right;
                        font-size: 1.5rem;
                        font-weight: bold;
                        line-height: 1;
                        color: #000;
                        text-shadow: 0 1px 0 #fff;
                        opacity: .2;
                    }

                    .close:focus, .close:hover {
                        color: #000;
                        text-decoration: none;
                        cursor: pointer;
                        opacity: .5;
                    }

                    button.close {
                        padding: 0;
                        cursor: pointer;
                        background: transparent;
                        border: 0;
                        -webkit-appearance: none;
                    }

                    .modal-open {
                        overflow: hidden;
                    }

                    .modal {
                        position: fixed;
                        top: 0;
                        right: 0;
                        bottom: 0;
                        left: 0;
                        z-index: 1050;
                        display: none;
                        overflow: hidden;
                        outline: 0;
                    }

                    .modal.fade .modal-dialog {
                        transition: transform .3s ease-out;
                        transform: translate(0, -25%);
                    }

                    .modal.in .modal-dialog {
                        transform: translate(0, 0);
                    }

                    .modal-open .modal {
                        overflow-x: hidden;
                        overflow-y: auto;
                    }

                    .modal-dialog {
                        position: relative;
                        width: auto;
                        margin: 10px;
                    }

                    .modal-content {
                        position: relative;
                        background-color: #fff;
                        background-clip: padding-box;
                        border: 1px solid rgba(0, 0, 0, 0.2);
                        border-radius: 0.3rem;
                        outline: 0;
                    }

                    .modal-backdrop {
                        position: fixed;
                        top: 0;
                        right: 0;
                        bottom: 0;
                        left: 0;
                        z-index: 1040;
                        background-color: #000;
                    }

                    .modal-backdrop.fade {
                        opacity: 0;
                    }

                    .modal-backdrop.in {
                        opacity: 0.5;
                    }

                    .modal-header {
                        padding: 15px;
                        border-bottom: 1px solid #e5e5e5;
                    }

                    .modal-header::after {
                        content: "";
                        display: table;
                        clear: both;
                    }

                    .modal-header .close {
                        margin-top: -2px;
                    }

                    .modal-title {
                        margin: 0;
                        line-height: 1.5;
                    }

                    .modal-body {
                        position: relative;
                        padding: 15px;
                    }

                    .modal-footer {
                        padding: 15px;
                        text-align: right;
                        border-top: 1px solid #e5e5e5;
                    }

                    .modal-footer::after {
                        content: "";
                        display: table;
                        clear: both;
                    }

                    .modal-scrollbar-measure {
                        position: absolute;
                        top: -9999px;
                        width: 50px;
                        height: 50px;
                        overflow: scroll;
                    }

                    @media (min-width: 576px) {
                        .modal-dialog {
                            max-width: 600px;
                            margin: 30px auto;
                        }

                        .modal-sm {
                            max-width: 300px;
                        }
                    }

                    @media (min-width: 992px) {
                        .modal-lg {
                            max-width: 900px;
                        }
                    }

                    .align-baseline {
                        vertical-align: baseline !important;
                    }

                    .align-top {
                        vertical-align: top !important;
                    }

                    .align-middle {
                        vertical-align: middle !important;
                    }

                    .align-bottom {
                        vertical-align: bottom !important;
                    }

                    .align-text-bottom {
                        vertical-align: text-bottom !important;
                    }

                    .align-text-top {
                        vertical-align: text-top !important;
                    }

                    .bg-faded {
                        background-color: #f7f7f9;
                    }

                    .bg-primary {
                        background-color: #0275d8 !important;
                    }

                    a.bg-primary:focus, a.bg-primary:hover {
                        background-color: #025aa5 !important;
                    }

                    .bg-success {
                        background-color: #5cb85c !important;
                    }

                    a.bg-success:focus, a.bg-success:hover {
                        background-color: #449d44 !important;
                    }

                    .bg-info {
                        background-color: #5bc0de !important;
                    }

                    a.bg-info:focus, a.bg-info:hover {
                        background-color: #31b0d5 !important;
                    }

                    .bg-warning {
                        background-color: #f0ad4e !important;
                    }

                    a.bg-warning:focus, a.bg-warning:hover {
                        background-color: #ec971f !important;
                    }

                    .bg-danger {
                        background-color: #d9534f !important;
                    }

                    a.bg-danger:focus, a.bg-danger:hover {
                        background-color: #c9302c !important;
                    }

                    .bg-inverse {
                        background-color: #373a3c !important;
                    }

                    a.bg-inverse:focus, a.bg-inverse:hover {
                        background-color: #1f2021 !important;
                    }

                    .rounded {
                        border-radius: 0.25rem;
                    }

                    .rounded-top {
                        border-top-right-radius: 0.25rem;
                        border-top-left-radius: 0.25rem;
                    }

                    .rounded-right {
                        border-bottom-right-radius: 0.25rem;
                        border-top-right-radius: 0.25rem;
                    }

                    .rounded-bottom {
                        border-bottom-right-radius: 0.25rem;
                        border-bottom-left-radius: 0.25rem;
                    }

                    .rounded-left {
                        border-bottom-left-radius: 0.25rem;
                        border-top-left-radius: 0.25rem;
                    }

                    .rounded-circle {
                        border-radius: 50%;
                    }

                    .clearfix::after {
                        content: "";
                        display: table;
                        clear: both;
                    }

                    .d-block {
                        display: block !important;
                    }

                    .d-inline-block {
                        display: inline-block !important;
                    }

                    .d-inline {
                        display: inline !important;
                    }

                    .flex-xs-first {
                        order: -1;
                    }

                    .flex-xs-last {
                        order: 1;
                    }

                    .flex-xs-unordered {
                        order: 0;
                    }

                    .flex-items-xs-top {
                        align-items: flex-start;
                    }

                    .flex-items-xs-middle {
                        align-items: center;
                    }

                    .flex-items-xs-bottom {
                        align-items: flex-end;
                    }

                    .flex-xs-top {
                        align-self: flex-start;
                    }

                    .flex-xs-middle {
                        align-self: center;
                    }

                    .flex-xs-bottom {
                        align-self: flex-end;
                    }

                    .flex-items-xs-left {
                        justify-content: flex-start;
                    }

                    .flex-items-xs-center {
                        justify-content: center;
                    }

                    .flex-items-xs-right {
                        justify-content: flex-end;
                    }

                    .flex-items-xs-around {
                        justify-content: space-around;
                    }

                    .flex-items-xs-between {
                        justify-content: space-between;
                    }

                    @media (min-width: 576px) {
                        .flex-sm-first {
                            order: -1;
                        }

                        .flex-sm-last {
                            order: 1;
                        }

                        .flex-sm-unordered {
                            order: 0;
                        }
                    }

                    @media (min-width: 576px) {
                        .flex-items-sm-top {
                            align-items: flex-start;
                        }

                        .flex-items-sm-middle {
                            align-items: center;
                        }

                        .flex-items-sm-bottom {
                            align-items: flex-end;
                        }
                    }

                    @media (min-width: 576px) {
                        .flex-sm-top {
                            align-self: flex-start;
                        }

                        .flex-sm-middle {
                            align-self: center;
                        }

                        .flex-sm-bottom {
                            align-self: flex-end;
                        }
                    }

                    @media (min-width: 576px) {
                        .flex-items-sm-left {
                            justify-content: flex-start;
                        }

                        .flex-items-sm-center {
                            justify-content: center;
                        }

                        .flex-items-sm-right {
                            justify-content: flex-end;
                        }

                        .flex-items-sm-around {
                            justify-content: space-around;
                        }

                        .flex-items-sm-between {
                            justify-content: space-between;
                        }
                    }

                    @media (min-width: 768px) {
                        .flex-md-first {
                            order: -1;
                        }

                        .flex-md-last {
                            order: 1;
                        }

                        .flex-md-unordered {
                            order: 0;
                        }
                    }

                    @media (min-width: 768px) {
                        .flex-items-md-top {
                            align-items: flex-start;
                        }

                        .flex-items-md-middle {
                            align-items: center;
                        }

                        .flex-items-md-bottom {
                            align-items: flex-end;
                        }
                    }

                    @media (min-width: 768px) {
                        .flex-md-top {
                            align-self: flex-start;
                        }

                        .flex-md-middle {
                            align-self: center;
                        }

                        .flex-md-bottom {
                            align-self: flex-end;
                        }
                    }

                    @media (min-width: 768px) {
                        .flex-items-md-left {
                            justify-content: flex-start;
                        }

                        .flex-items-md-center {
                            justify-content: center;
                        }

                        .flex-items-md-right {
                            justify-content: flex-end;
                        }

                        .flex-items-md-around {
                            justify-content: space-around;
                        }

                        .flex-items-md-between {
                            justify-content: space-between;
                        }
                    }

                    @media (min-width: 992px) {
                        .flex-lg-first {
                            order: -1;
                        }

                        .flex-lg-last {
                            order: 1;
                        }

                        .flex-lg-unordered {
                            order: 0;
                        }
                    }

                    @media (min-width: 992px) {
                        .flex-items-lg-top {
                            align-items: flex-start;
                        }

                        .flex-items-lg-middle {
                            align-items: center;
                        }

                        .flex-items-lg-bottom {
                            align-items: flex-end;
                        }
                    }

                    @media (min-width: 992px) {
                        .flex-lg-top {
                            align-self: flex-start;
                        }

                        .flex-lg-middle {
                            align-self: center;
                        }

                        .flex-lg-bottom {
                            align-self: flex-end;
                        }
                    }

                    @media (min-width: 992px) {
                        .flex-items-lg-left {
                            justify-content: flex-start;
                        }

                        .flex-items-lg-center {
                            justify-content: center;
                        }

                        .flex-items-lg-right {
                            justify-content: flex-end;
                        }

                        .flex-items-lg-around {
                            justify-content: space-around;
                        }

                        .flex-items-lg-between {
                            justify-content: space-between;
                        }
                    }

                    @media (min-width: 1200px) {
                        .flex-xl-first {
                            order: -1;
                        }

                        .flex-xl-last {
                            order: 1;
                        }

                        .flex-xl-unordered {
                            order: 0;
                        }
                    }

                    @media (min-width: 1200px) {
                        .flex-items-xl-top {
                            align-items: flex-start;
                        }

                        .flex-items-xl-middle {
                            align-items: center;
                        }

                        .flex-items-xl-bottom {
                            align-items: flex-end;
                        }
                    }

                    @media (min-width: 1200px) {
                        .flex-xl-top {
                            align-self: flex-start;
                        }

                        .flex-xl-middle {
                            align-self: center;
                        }

                        .flex-xl-bottom {
                            align-self: flex-end;
                        }
                    }

                    @media (min-width: 1200px) {
                        .flex-items-xl-left {
                            justify-content: flex-start;
                        }

                        .flex-items-xl-center {
                            justify-content: center;
                        }

                        .flex-items-xl-right {
                            justify-content: flex-end;
                        }

                        .flex-items-xl-around {
                            justify-content: space-around;
                        }

                        .flex-items-xl-between {
                            justify-content: space-between;
                        }
                    }

                    .float-xs-left {
                        float: left !important;
                    }

                    .float-xs-right {
                        float: right !important;
                    }

                    .float-xs-none {
                        float: none !important;
                    }

                    @media (min-width: 576px) {
                        .float-sm-left {
                            float: left !important;
                        }

                        .float-sm-right {
                            float: right !important;
                        }

                        .float-sm-none {
                            float: none !important;
                        }
                    }

                    @media (min-width: 768px) {
                        .float-md-left {
                            float: left !important;
                        }

                        .float-md-right {
                            float: right !important;
                        }

                        .float-md-none {
                            float: none !important;
                        }
                    }

                    @media (min-width: 992px) {
                        .float-lg-left {
                            float: left !important;
                        }

                        .float-lg-right {
                            float: right !important;
                        }

                        .float-lg-none {
                            float: none !important;
                        }
                    }

                    @media (min-width: 1200px) {
                        .float-xl-left {
                            float: left !important;
                        }

                        .float-xl-right {
                            float: right !important;
                        }

                        .float-xl-none {
                            float: none !important;
                        }
                    }

                    .sr-only {
                        position: absolute;
                        width: 1px;
                        height: 1px;
                        padding: 0;
                        margin: -1px;
                        overflow: hidden;
                        clip: rect(0, 0, 0, 0);
                        border: 0;
                    }

                    .sr-only-focusable:active, .sr-only-focusable:focus {
                        position: static;
                        width: auto;
                        height: auto;
                        margin: 0;
                        overflow: visible;
                        clip: auto;
                    }

                    .w-100 {
                        width: 100% !important;
                    }

                    .h-100 {
                        height: 100% !important;
                    }

                    .mx-auto {
                        margin-right: auto !important;
                        margin-left: auto !important;
                    }

                    .m-0 {
                        margin: 0 0 !important;
                    }

                    .mt-0 {
                        margin-top: 0 !important;
                    }

                    .mr-0 {
                        margin-right: 0 !important;
                    }

                    .mb-0 {
                        margin-bottom: 0 !important;
                    }

                    .ml-0 {
                        margin-left: 0 !important;
                    }

                    .mx-0 {
                        margin-right: 0 !important;
                        margin-left: 0 !important;
                    }

                    .my-0 {
                        margin-top: 0 !important;
                        margin-bottom: 0 !important;
                    }

                    .m-1 {
                        margin: 1rem 1rem !important;
                    }

                    .mt-1 {
                        margin-top: 1rem !important;
                    }

                    .mr-1 {
                        margin-right: 1rem !important;
                    }

                    .mb-1 {
                        margin-bottom: 1rem !important;
                    }

                    .ml-1 {
                        margin-left: 1rem !important;
                    }

                    .mx-1 {
                        margin-right: 1rem !important;
                        margin-left: 1rem !important;
                    }

                    .my-1 {
                        margin-top: 1rem !important;
                        margin-bottom: 1rem !important;
                    }

                    .m-2 {
                        margin: 1.5rem 1.5rem !important;
                    }

                    .mt-2 {
                        margin-top: 1.5rem !important;
                    }

                    .mr-2 {
                        margin-right: 1.5rem !important;
                    }

                    .mb-2 {
                        margin-bottom: 1.5rem !important;
                    }

                    .ml-2 {
                        margin-left: 1.5rem !important;
                    }

                    .mx-2 {
                        margin-right: 1.5rem !important;
                        margin-left: 1.5rem !important;
                    }

                    .my-2 {
                        margin-top: 1.5rem !important;
                        margin-bottom: 1.5rem !important;
                    }

                    .m-3 {
                        margin: 3rem 3rem !important;
                    }

                    .mt-3 {
                        margin-top: 3rem !important;
                    }

                    .mr-3 {
                        margin-right: 3rem !important;
                    }

                    .mb-3 {
                        margin-bottom: 3rem !important;
                    }

                    .ml-3 {
                        margin-left: 3rem !important;
                    }

                    .mx-3 {
                        margin-right: 3rem !important;
                        margin-left: 3rem !important;
                    }

                    .my-3 {
                        margin-top: 3rem !important;
                        margin-bottom: 3rem !important;
                    }

                    .p-0 {
                        padding: 0 0 !important;
                    }

                    .pt-0 {
                        padding-top: 0 !important;
                    }

                    .pr-0 {
                        padding-right: 0 !important;
                    }

                    .pb-0 {
                        padding-bottom: 0 !important;
                    }

                    .pl-0 {
                        padding-left: 0 !important;
                    }

                    .px-0 {
                        padding-right: 0 !important;
                        padding-left: 0 !important;
                    }

                    .py-0 {
                        padding-top: 0 !important;
                        padding-bottom: 0 !important;
                    }

                    .p-1 {
                        padding: 1rem 1rem !important;
                    }

                    .pt-1 {
                        padding-top: 1rem !important;
                    }

                    .pr-1 {
                        padding-right: 1rem !important;
                    }

                    .pb-1 {
                        padding-bottom: 1rem !important;
                    }

                    .pl-1 {
                        padding-left: 1rem !important;
                    }

                    .px-1 {
                        padding-right: 1rem !important;
                        padding-left: 1rem !important;
                    }

                    .py-1 {
                        padding-top: 1rem !important;
                        padding-bottom: 1rem !important;
                    }

                    .p-2 {
                        padding: 1.5rem 1.5rem !important;
                    }

                    .pt-2 {
                        padding-top: 1.5rem !important;
                    }

                    .pr-2 {
                        padding-right: 1.5rem !important;
                    }

                    .pb-2 {
                        padding-bottom: 1.5rem !important;
                    }

                    .pl-2 {
                        padding-left: 1.5rem !important;
                    }

                    .px-2 {
                        padding-right: 1.5rem !important;
                        padding-left: 1.5rem !important;
                    }

                    .py-2 {
                        padding-top: 1.5rem !important;
                        padding-bottom: 1.5rem !important;
                    }

                    .p-3 {
                        padding: 3rem 3rem !important;
                    }

                    .pt-3 {
                        padding-top: 3rem !important;
                    }

                    .pr-3 {
                        padding-right: 3rem !important;
                    }

                    .pb-3 {
                        padding-bottom: 3rem !important;
                    }

                    .pl-3 {
                        padding-left: 3rem !important;
                    }

                    .px-3 {
                        padding-right: 3rem !important;
                        padding-left: 3rem !important;
                    }

                    .py-3 {
                        padding-top: 3rem !important;
                        padding-bottom: 3rem !important;
                    }

                    .pos-f-t {
                        position: fixed;
                        top: 0;
                        right: 0;
                        left: 0;
                        z-index: 1030;
                    }

                    .text-justify {
                        text-align: justify !important;
                    }

                    .text-nowrap {
                        white-space: nowrap !important;
                    }

                    .text-truncate {
                        overflow: hidden;
                        text-overflow: ellipsis;
                        white-space: nowrap;
                    }

                    .text-xs-left {
                        text-align: left !important;
                    }

                    .text-xs-right {
                        text-align: right !important;
                    }

                    .text-xs-center {
                        text-align: center !important;
                    }

                    @media (min-width: 576px) {
                        .text-sm-left {
                            text-align: left !important;
                        }

                        .text-sm-right {
                            text-align: right !important;
                        }

                        .text-sm-center {
                            text-align: center !important;
                        }
                    }

                    @media (min-width: 768px) {
                        .text-md-left {
                            text-align: left !important;
                        }

                        .text-md-right {
                            text-align: right !important;
                        }

                        .text-md-center {
                            text-align: center !important;
                        }
                    }

                    @media (min-width: 992px) {
                        .text-lg-left {
                            text-align: left !important;
                        }

                        .text-lg-right {
                            text-align: right !important;
                        }

                        .text-lg-center {
                            text-align: center !important;
                        }
                    }

                    @media (min-width: 1200px) {
                        .text-xl-left {
                            text-align: left !important;
                        }

                        .text-xl-right {
                            text-align: right !important;
                        }

                        .text-xl-center {
                            text-align: center !important;
                        }
                    }

                    .text-lowercase {
                        text-transform: lowercase !important;
                    }

                    .text-uppercase {
                        text-transform: uppercase !important;
                    }

                    .text-capitalize {
                        text-transform: capitalize !important;
                    }

                    .font-weight-normal {
                        font-weight: normal;
                    }

                    .font-weight-bold {
                        font-weight: bold;
                    }

                    .font-italic {
                        font-style: italic;
                    }

                    .text-white {
                        color: #fff !important;
                    }

                    .text-muted {
                        color: #818a91 !important;
                    }

                    a.text-muted:focus, a.text-muted:hover {
                        color: #687077 !important;
                    }

                    .text-primary {
                        color: #0275d8 !important;
                    }

                    a.text-primary:focus, a.text-primary:hover {
                        color: #025aa5 !important;
                    }

                    .text-success {
                        color: #5cb85c !important;
                    }

                    a.text-success:focus, a.text-success:hover {
                        color: #449d44 !important;
                    }

                    .text-info {
                        color: #5bc0de !important;
                    }

                    a.text-info:focus, a.text-info:hover {
                        color: #31b0d5 !important;
                    }

                    .text-warning {
                        color: #f0ad4e !important;
                    }

                    a.text-warning:focus, a.text-warning:hover {
                        color: #ec971f !important;
                    }

                    .text-danger {
                        color: #d9534f !important;
                    }

                    a.text-danger:focus, a.text-danger:hover {
                        color: #c9302c !important;
                    }

                    .text-gray-dark {
                        color: #373a3c !important;
                    }

                    a.text-gray-dark:focus, a.text-gray-dark:hover {
                        color: #1f2021 !important;
                    }

                    .text-hide {
                        font: 0/0 a;
                        color: transparent;
                        text-shadow: none;
                        background-color: transparent;
                        border: 0;
                    }

                    .invisible {
                        visibility: hidden !important;
                    }

                    .hidden-xs-up {
                        display: none !important;
                    }

                    @media (max-width: 575px) {
                        .hidden-xs-down {
                            display: none !important;
                        }
                    }

                    @media (min-width: 576px) {
                        .hidden-sm-up {
                            display: none !important;
                        }
                    }

                    @media (max-width: 767px) {
                        .hidden-sm-down {
                            display: none !important;
                        }
                    }

                    @media (min-width: 768px) {
                        .hidden-md-up {
                            display: none !important;
                        }
                    }

                    @media (max-width: 991px) {
                        .hidden-md-down {
                            display: none !important;
                        }
                    }

                    @media (min-width: 992px) {
                        .hidden-lg-up {
                            display: none !important;
                        }
                    }

                    @media (max-width: 1199px) {
                        .hidden-lg-down {
                            display: none !important;
                        }
                    }

                    @media (min-width: 1200px) {
                        .hidden-xl-up {
                            display: none !important;
                        }
                    }

                    .hidden-xl-down {
                        display: none !important;
                    }

                    .visible-print-block {
                        display: none !important;
                    }

                    @media print {
                        .visible-print-block {
                            display: block !important;
                        }
                    }

                    .visible-print-inline {
                        display: none !important;
                    }

                    @media print {
                        .visible-print-inline {
                            display: inline !important;
                        }
                    }

                    .visible-print-inline-block {
                        display: none !important;
                    }

                    @media print {
                        .visible-print-inline-block {
                            display: inline-block !important;
                        }
                    }

                    @media print {
                        .hidden-print {
                            display: none !important;
                        }
                    }
    </style>
  </head>
  <body>
    <div class="container-fluid" style="background-color:#025aa5;">
        <div class="card">
        <div class="card-header">
            <center>
                <h5 class="card-title" style="color:white;">Temperature Monitoring Report</h5>
                <p style="color:white;">Date(<span>Oct 01,2022 - Oct 21,2022</span>)</p>
            </center>
        </div>
            <div class="card-body">
                <table  class="table table-success table-striped-columns">
                    <thead>
                        <tr>
                            <th>Temperature</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody id="table-main">
                        @foreach($temperature as $temp)
                            <tr>
                                <td>{{$temp->temperature}}</td>
                                <td>{{$temp->statusName}}</td>
                                <td>{{$temp->date}}</td>
                                <td>{{$temp->time}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <p style="float:right;">
                    Mushroom Monitoring System
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>