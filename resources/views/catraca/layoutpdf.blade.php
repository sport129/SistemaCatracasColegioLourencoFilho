<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <style>
        /*!
 * Bootstrap v4.0.0-beta (https://getbootstrap.com)
 * Copyright 2011-2017 The Bootstrap Authors
 * Copyright 2011-2017 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

        @media print {
            *,
            ::after,
            ::before {
                text-shadow: none !important;
                box-shadow: none !important
            }
            a,
            a:visited {
                text-decoration: underline
            }
            abbr[title]::after {
                content: " (" attr(title) ")"
            }
            pre {
                white-space: pre-wrap !important
            }
            blockquote,
            pre {
                border: 1px solid #999;
                page-break-inside: avoid
            }
            thead {
                display: table-header-group
            }
            img,
            tr {
                page-break-inside: avoid
            }
            h2,
            h3,
            p {
                orphans: 3;
                widows: 3
            }
            h2,
            h3 {
                page-break-after: avoid
            }
            .navbar {
                display: none
            }
            .badge {
                border: 1px solid #000
            }
            .table {
                border-collapse: collapse !important
            }
            .table td,
            .table th {
                background-color: #fff !important
            }
            .table-bordered td,
            .table-bordered th {
                border: 1px solid #ddd !important
            }
        }

        html {
            box-sizing: border-box;
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -ms-overflow-style: scrollbar;
            -webkit-tap-highlight-color: transparent
        }

        *,
        ::after,
        ::before {
            box-sizing: inherit
        }

        @-ms-viewport {
            width: device-width
        }

        article,
        aside,
        dialog,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff
        }

        [tabindex="-1"]:focus {
            outline: 0 !important
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        abbr[data-original-title],
        abbr[title] {
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            border-bottom: 0
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit
        }

        dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ol ol,
        ol ul,
        ul ol,
        ul ul {
            margin-bottom: 0
        }

        dt {
            font-weight: 700
        }

        dd {
            margin-bottom: .5rem;
            margin-left: 0
        }

        blockquote {
            margin: 0 0 1rem
        }

        dfn {
            font-style: italic
        }

        b,
        strong {
            font-weight: bolder
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline
        }

        a:not([href]):not([tabindex]) {
            color: inherit;
            text-decoration: none
        }

        a:not([href]):not([tabindex]):focus,
        a:not([href]):not([tabindex]):hover {
            color: inherit;
            text-decoration: none
        }

        a:not([href]):not([tabindex]):focus {
            outline: 0
        }

        code,
        kbd,
        pre,
        samp {
            font-family: monospace, monospace;
            font-size: 1em
        }

        pre {
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto
        }

        figure {
            margin: 0 0 1rem
        }

        img {
            vertical-align: middle;
            border-style: none
        }

        svg:not(:root) {
            overflow: hidden
        }

        [role=button],
        a,
        area,
        button,
        input,
        label,
        select,
        summary,
        textarea {
            -ms-touch-action: manipulation;
            touch-action: manipulation
        }

        table {
            border-collapse: collapse
        }

        caption {
            padding-top: .75rem;
            padding-bottom: .75rem;
            color: #868e96;
            text-align: left;
            caption-side: bottom
        }

        th {
            text-align: left
        }

        label {
            display: inline-block;
            margin-bottom: .5rem
        }

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button,
        input {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        [type=reset],
        [type=submit],
        button,
        html [type=button] {
            -webkit-appearance: button
        }

        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner,
        button::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        input[type=checkbox],
        input[type=radio] {
            box-sizing: border-box;
            padding: 0
        }

        input[type=date],
        input[type=datetime-local],
        input[type=month],
        input[type=time] {
            -webkit-appearance: listbox
        }

        textarea {
            overflow: auto;
            resize: vertical
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0
        }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            padding: 0;
            margin-bottom: .5rem;
            font-size: 1.5rem;
            line-height: inherit;
            color: inherit;
            white-space: normal
        }

        progress {
            vertical-align: baseline
        }

        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: none
        }

        [type=search]::-webkit-search-cancel-button,
        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }

        output {
            display: inline-block
        }

        summary {
            display: list-item
        }

        template {
            display: none
        }

        [hidden] {
            display: none !important
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit
        }

        .h1,
        h1 {
            font-size: 2.5rem
        }

        .h2,
        h2 {
            font-size: 2rem
        }

        .h3,
        h3 {
            font-size: 1.75rem
        }

        .h4,
        h4 {
            font-size: 1.5rem
        }

        .h5,
        h5 {
            font-size: 1.25rem
        }

        .h6,
        h6 {
            font-size: 1rem
        }

        .lead {
            font-size: 1.25rem;
            font-weight: 300
        }

        .display-1 {
            font-size: 6rem;
            font-weight: 300;
            line-height: 1.1
        }

        .display-2 {
            font-size: 5.5rem;
            font-weight: 300;
            line-height: 1.1
        }

        .display-3 {
            font-size: 4.5rem;
            font-weight: 300;
            line-height: 1.1
        }

        .display-4 {
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.1
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, .1)
        }

        .small,
        small {
            font-size: 80%;
            font-weight: 400
        }

        .mark,
        mark {
            padding: .2em;
            background-color: #fcf8e3
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none
        }

        .list-inline {
            padding-left: 0;
            list-style: none
        }

        .list-inline-item {
            display: inline-block
        }

        .list-inline-item:not(:last-child) {
            margin-right: 5px
        }

        .initialism {
            font-size: 90%;
            text-transform: uppercase
        }

        .blockquote {
            margin-bottom: 1rem;
            font-size: 1.25rem
        }

        .blockquote-footer {
            display: block;
            font-size: 80%;
            color: #868e96
        }

        .blockquote-footer::before {
            content: "\2014 \00A0"
        }

        .img-fluid {
            max-width: 100%;
            height: auto
        }

        .img-thumbnail {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: .25rem;
            transition: all .2s ease-in-out;
            max-width: 100%;
            height: auto
        }

        .figure {
            display: inline-block
        }

        .figure-img {
            margin-bottom: .5rem;
            line-height: 1
        }

        .figure-caption {
            font-size: 90%;
            color: #868e96
        }

        code,
        kbd,
        pre,
        samp {
            font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }

        code {
            padding: .2rem .4rem;
            font-size: 90%;
            color: #bd4147;
            background-color: #f8f9fa;
            border-radius: .25rem
        }

        a>code {
            padding: 0;
            color: inherit;
            background-color: inherit
        }

        kbd {
            padding: .2rem .4rem;
            font-size: 90%;
            color: #fff;
            background-color: #212529;
            border-radius: .2rem
        }

        kbd kbd {
            padding: 0;
            font-size: 100%;
            font-weight: 700
        }

        pre {
            display: block;
            margin-top: 0;
            margin-bottom: 1rem;
            font-size: 90%;
            color: #212529
        }

        pre code {
            padding: 0;
            font-size: inherit;
            color: inherit;
            background-color: transparent;
            border-radius: 0
        }

        .pre-scrollable {
            max-height: 340px;
            overflow-y: scroll
        }

        .container {
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
            width: 100%
        }

        @media (min-width:576px) {
            .container {
                max-width: 540px
            }
        }

        @media (min-width:768px) {
            .container {
                max-width: 720px
            }
        }

        @media (min-width:992px) {
            .container {
                max-width: 960px
            }
        }

        @media (min-width:1200px) {
            .container {
                max-width: 1140px
            }
        }

        .container-fluid {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
            width: 100%
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0
        }

        .no-gutters>.col,
        .no-gutters>[class*=col-] {
            padding-right: 0;
            padding-left: 0
        }

        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none
        }

        .col-1 {
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-10 {
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-11 {
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-1 {
            -ms-flex-order: 1;
            order: 1
        }

        .order-2 {
            -ms-flex-order: 2;
            order: 2
        }

        .order-3 {
            -ms-flex-order: 3;
            order: 3
        }

        .order-4 {
            -ms-flex-order: 4;
            order: 4
        }

        .order-5 {
            -ms-flex-order: 5;
            order: 5
        }

        .order-6 {
            -ms-flex-order: 6;
            order: 6
        }

        .order-7 {
            -ms-flex-order: 7;
            order: 7
        }

        .order-8 {
            -ms-flex-order: 8;
            order: 8
        }

        .order-9 {
            -ms-flex-order: 9;
            order: 9
        }

        .order-10 {
            -ms-flex-order: 10;
            order: 10
        }

        .order-11 {
            -ms-flex-order: 11;
            order: 11
        }

        .order-12 {
            -ms-flex-order: 12;
            order: 12
        }

        @media (min-width:576px) {
            .col-sm {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }
            .col-sm-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none
            }
            .col-sm-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }
            .col-sm-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }
            .col-sm-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }
            .col-sm-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }
            .col-sm-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }
            .col-sm-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }
            .col-sm-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }
            .col-sm-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }
            .col-sm-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }
            .col-sm-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }
            .col-sm-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }
            .col-sm-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }
            .order-sm-1 {
                -ms-flex-order: 1;
                order: 1
            }
            .order-sm-2 {
                -ms-flex-order: 2;
                order: 2
            }
            .order-sm-3 {
                -ms-flex-order: 3;
                order: 3
            }
            .order-sm-4 {
                -ms-flex-order: 4;
                order: 4
            }
            .order-sm-5 {
                -ms-flex-order: 5;
                order: 5
            }
            .order-sm-6 {
                -ms-flex-order: 6;
                order: 6
            }
            .order-sm-7 {
                -ms-flex-order: 7;
                order: 7
            }
            .order-sm-8 {
                -ms-flex-order: 8;
                order: 8
            }
            .order-sm-9 {
                -ms-flex-order: 9;
                order: 9
            }
            .order-sm-10 {
                -ms-flex-order: 10;
                order: 10
            }
            .order-sm-11 {
                -ms-flex-order: 11;
                order: 11
            }
            .order-sm-12 {
                -ms-flex-order: 12;
                order: 12
            }
        }

        @media (min-width:768px) {
            .col-md {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }
            .col-md-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none
            }
            .col-md-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }
            .col-md-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }
            .col-md-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }
            .col-md-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }
            .col-md-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }
            .col-md-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }
            .col-md-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }
            .col-md-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }
            .col-md-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }
            .col-md-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }
            .col-md-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }
            .col-md-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }
            .order-md-1 {
                -ms-flex-order: 1;
                order: 1
            }
            .order-md-2 {
                -ms-flex-order: 2;
                order: 2
            }
            .order-md-3 {
                -ms-flex-order: 3;
                order: 3
            }
            .order-md-4 {
                -ms-flex-order: 4;
                order: 4
            }
            .order-md-5 {
                -ms-flex-order: 5;
                order: 5
            }
            .order-md-6 {
                -ms-flex-order: 6;
                order: 6
            }
            .order-md-7 {
                -ms-flex-order: 7;
                order: 7
            }
            .order-md-8 {
                -ms-flex-order: 8;
                order: 8
            }
            .order-md-9 {
                -ms-flex-order: 9;
                order: 9
            }
            .order-md-10 {
                -ms-flex-order: 10;
                order: 10
            }
            .order-md-11 {
                -ms-flex-order: 11;
                order: 11
            }
            .order-md-12 {
                -ms-flex-order: 12;
                order: 12
            }
        }

        @media (min-width:992px) {
            .col-lg {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }
            .col-lg-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none
            }
            .col-lg-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }
            .col-lg-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }
            .col-lg-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }
            .col-lg-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }
            .col-lg-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }
            .col-lg-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }
            .col-lg-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }
            .col-lg-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }
            .col-lg-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }
            .col-lg-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }
            .col-lg-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }
            .col-lg-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }
            .order-lg-1 {
                -ms-flex-order: 1;
                order: 1
            }
            .order-lg-2 {
                -ms-flex-order: 2;
                order: 2
            }
            .order-lg-3 {
                -ms-flex-order: 3;
                order: 3
            }
            .order-lg-4 {
                -ms-flex-order: 4;
                order: 4
            }
            .order-lg-5 {
                -ms-flex-order: 5;
                order: 5
            }
            .order-lg-6 {
                -ms-flex-order: 6;
                order: 6
            }
            .order-lg-7 {
                -ms-flex-order: 7;
                order: 7
            }
            .order-lg-8 {
                -ms-flex-order: 8;
                order: 8
            }
            .order-lg-9 {
                -ms-flex-order: 9;
                order: 9
            }
            .order-lg-10 {
                -ms-flex-order: 10;
                order: 10
            }
            .order-lg-11 {
                -ms-flex-order: 11;
                order: 11
            }
            .order-lg-12 {
                -ms-flex-order: 12;
                order: 12
            }
        }

        @media (min-width:1200px) {
            .col-xl {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }
            .col-xl-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none
            }
            .col-xl-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }
            .col-xl-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }
            .col-xl-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }
            .col-xl-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }
            .col-xl-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }
            .col-xl-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }
            .col-xl-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }
            .col-xl-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }
            .col-xl-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }
            .col-xl-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }
            .col-xl-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }
            .col-xl-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }
            .order-xl-1 {
                -ms-flex-order: 1;
                order: 1
            }
            .order-xl-2 {
                -ms-flex-order: 2;
                order: 2
            }
            .order-xl-3 {
                -ms-flex-order: 3;
                order: 3
            }
            .order-xl-4 {
                -ms-flex-order: 4;
                order: 4
            }
            .order-xl-5 {
                -ms-flex-order: 5;
                order: 5
            }
            .order-xl-6 {
                -ms-flex-order: 6;
                order: 6
            }
            .order-xl-7 {
                -ms-flex-order: 7;
                order: 7
            }
            .order-xl-8 {
                -ms-flex-order: 8;
                order: 8
            }
            .order-xl-9 {
                -ms-flex-order: 9;
                order: 9
            }
            .order-xl-10 {
                -ms-flex-order: 10;
                order: 10
            }
            .order-xl-11 {
                -ms-flex-order: 11;
                order: 11
            }
            .order-xl-12 {
                -ms-flex-order: 12;
                order: 12
            }
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent
        }

        .table td,
        .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #e9ecef
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #e9ecef
        }

        .table tbody+tbody {
            border-top: 2px solid #e9ecef
        }

        .table .table {
            background-color: #fff
        }

        .table-sm td,
        .table-sm th {
            padding: .3rem
        }

        .table-bordered {
            border: 1px solid #e9ecef
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #e9ecef
        }

        .table-bordered thead td,
        .table-bordered thead th {
            border-bottom-width: 2px
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, .05)
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, .075)
        }

        .table-primary,
        .table-primary>td,
        .table-primary>th {
            background-color: #b8daff
        }

        .table-hover .table-primary:hover {
            background-color: #9fcdff
        }

        .table-hover .table-primary:hover>td,
        .table-hover .table-primary:hover>th {
            background-color: #9fcdff
        }

        .table-secondary,
        .table-secondary>td,
        .table-secondary>th {
            background-color: #dddfe2
        }

        .table-hover .table-secondary:hover {
            background-color: #cfd2d6
        }

        .table-hover .table-secondary:hover>td,
        .table-hover .table-secondary:hover>th {
            background-color: #cfd2d6
        }

        .table-success,
        .table-success>td,
        .table-success>th {
            background-color: #c3e6cb
        }

        .table-hover .table-success:hover {
            background-color: #b1dfbb
        }

        .table-hover .table-success:hover>td,
        .table-hover .table-success:hover>th {
            background-color: #b1dfbb
        }

        .table-info,
        .table-info>td,
        .table-info>th {
            background-color: #bee5eb
        }

        .table-hover .table-info:hover {
            background-color: #abdde5
        }

        .table-hover .table-info:hover>td,
        .table-hover .table-info:hover>th {
            background-color: #abdde5
        }

        .table-warning,
        .table-warning>td,
        .table-warning>th {
            background-color: #ffeeba
        }

        .table-hover .table-warning:hover {
            background-color: #ffe8a1
        }

        .table-hover .table-warning:hover>td,
        .table-hover .table-warning:hover>th {
            background-color: #ffe8a1
        }

        .table-danger,
        .table-danger>td,
        .table-danger>th {
            background-color: #f5c6cb
        }

        .table-hover .table-danger:hover {
            background-color: #f1b0b7
        }

        .table-hover .table-danger:hover>td,
        .table-hover .table-danger:hover>th {
            background-color: #f1b0b7
        }

        .table-light,
        .table-light>td,
        .table-light>th {
            background-color: #fdfdfe
        }

        .table-hover .table-light:hover {
            background-color: #ececf6
        }

        .table-hover .table-light:hover>td,
        .table-hover .table-light:hover>th {
            background-color: #ececf6
        }

        .table-dark,
        .table-dark>td,
        .table-dark>th {
            background-color: #c6c8ca
        }

        .table-hover .table-dark:hover {
            background-color: #b9bbbe
        }

        .table-hover .table-dark:hover>td,
        .table-hover .table-dark:hover>th {
            background-color: #b9bbbe
        }

        .table-active,
        .table-active>td,
        .table-active>th {
            background-color: rgba(0, 0, 0, .075)
        }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, .075)
        }

        .table-hover .table-active:hover>td,
        .table-hover .table-active:hover>th {
            background-color: rgba(0, 0, 0, .075)
        }

        .thead-inverse th {
            color: #fff;
            background-color: #212529
        }

        .thead-default th {
            color: #495057;
            background-color: #e9ecef
        }

        .table-inverse {
            color: #fff;
            background-color: #212529
        }

        .table-inverse td,
        .table-inverse th,
        .table-inverse thead th {
            border-color: #32383e
        }

        .table-inverse.table-bordered {
            border: 0
        }

        .table-inverse.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, .05)
        }

        .table-inverse.table-hover tbody tr:hover {
            background-color: rgba(255, 255, 255, .075)
        }

        @media (max-width:991px) {
            .table-responsive {
                display: block;
                width: 100%;
                overflow-x: auto;
                -ms-overflow-style: -ms-autohiding-scrollbar
            }
            .table-responsive.table-bordered {
                border: 0
            }
        }

        .form-control {
            display: block;
            width: 100%;
            padding: .5rem .75rem;
            font-size: 1rem;
            line-height: 1.25;
            color: #495057;
            background-color: #fff;
            background-image: none;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0
        }

        .form-control::-webkit-input-placeholder {
            color: #868e96;
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            color: #868e96;
            opacity: 1
        }

        .form-control::placeholder {
            color: #868e96;
            opacity: 1
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #e9ecef;
            opacity: 1
        }

        select.form-control:not([size]):not([multiple]) {
            height: calc(2.25rem + 2px)
        }

        select.form-control:focus::-ms-value {
            color: #495057;
            background-color: #fff
        }

        .form-control-file,
        .form-control-range {
            display: block
        }

        .col-form-label {
            padding-top: calc(.5rem - 1px * 2);
            padding-bottom: calc(.5rem - 1px * 2);
            margin-bottom: 0
        }

        .col-form-label-lg {
            padding-top: calc(.5rem - 1px * 2);
            padding-bottom: calc(.5rem - 1px * 2);
            font-size: 1.25rem
        }

        .col-form-label-sm {
            padding-top: calc(.25rem - 1px * 2);
            padding-bottom: calc(.25rem - 1px * 2);
            font-size: .875rem
        }

        .col-form-legend {
            padding-top: .5rem;
            padding-bottom: .5rem;
            margin-bottom: 0;
            font-size: 1rem
        }

        .form-control-plaintext {
            padding-top: .5rem;
            padding-bottom: .5rem;
            margin-bottom: 0;
            line-height: 1.25;
            border: solid transparent;
            border-width: 1px 0
        }

        .form-control-plaintext.form-control-lg,
        .form-control-plaintext.form-control-sm,
        .input-group-lg>.form-control-plaintext.form-control,
        .input-group-lg>.form-control-plaintext.input-group-addon,
        .input-group-lg>.input-group-btn>.form-control-plaintext.btn,
        .input-group-sm>.form-control-plaintext.form-control,
        .input-group-sm>.form-control-plaintext.input-group-addon,
        .input-group-sm>.input-group-btn>.form-control-plaintext.btn {
            padding-right: 0;
            padding-left: 0
        }

        .form-control-sm,
        .input-group-sm>.form-control,
        .input-group-sm>.input-group-addon,
        .input-group-sm>.input-group-btn>.btn {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .input-group-sm>.input-group-btn>select.btn:not([size]):not([multiple]),
        .input-group-sm>select.form-control:not([size]):not([multiple]),
        .input-group-sm>select.input-group-addon:not([size]):not([multiple]),
        select.form-control-sm:not([size]):not([multiple]) {
            height: calc(1.8125rem + 2px)
        }

        .form-control-lg,
        .input-group-lg>.form-control,
        .input-group-lg>.input-group-addon,
        .input-group-lg>.input-group-btn>.btn {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        .input-group-lg>.input-group-btn>select.btn:not([size]):not([multiple]),
        .input-group-lg>select.form-control:not([size]):not([multiple]),
        .input-group-lg>select.input-group-addon:not([size]):not([multiple]),
        select.form-control-lg:not([size]):not([multiple]) {
            height: calc(2.3125rem + 2px)
        }

        .form-group {
            margin-bottom: 1rem
        }

        .form-text {
            display: block;
            margin-top: .25rem
        }

        .form-row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px
        }

        .form-row>.col,
        .form-row>[class*=col-] {
            padding-right: 5px;
            padding-left: 5px
        }

        .form-check {
            position: relative;
            display: block;
            margin-bottom: .5rem
        }

        .form-check.disabled .form-check-label {
            color: #868e96
        }

        .form-check-label {
            padding-left: 1.25rem;
            margin-bottom: 0
        }

        .form-check-input {
            position: absolute;
            margin-top: .25rem;
            margin-left: -1.25rem
        }

        .form-check-input:only-child {
            position: static
        }

        .form-check-inline {
            display: inline-block
        }

        .form-check-inline .form-check-label {
            vertical-align: middle
        }

        .form-check-inline+.form-check-inline {
            margin-left: .75rem
        }

        .invalid-feedback {
            display: none;
            margin-top: .25rem;
            font-size: .875rem;
            color: #dc3545
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            width: 250px;
            padding: .5rem;
            margin-top: .1rem;
            font-size: .875rem;
            line-height: 1;
            color: #fff;
            background-color: rgba(220, 53, 69, .8);
            border-radius: .2rem
        }

        .custom-select.is-valid,
        .form-control.is-valid,
        .was-validated .custom-select:valid,
        .was-validated .form-control:valid {
            border-color: #28a745
        }

        .custom-select.is-valid:focus,
        .form-control.is-valid:focus,
        .was-validated .custom-select:valid:focus,
        .was-validated .form-control:valid:focus {
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
        }

        .custom-select.is-valid~.invalid-feedback,
        .custom-select.is-valid~.invalid-tooltip,
        .form-control.is-valid~.invalid-feedback,
        .form-control.is-valid~.invalid-tooltip,
        .was-validated .custom-select:valid~.invalid-feedback,
        .was-validated .custom-select:valid~.invalid-tooltip,
        .was-validated .form-control:valid~.invalid-feedback,
        .was-validated .form-control:valid~.invalid-tooltip {
            display: block
        }

        .form-check-input.is-valid+.form-check-label,
        .was-validated .form-check-input:valid+.form-check-label {
            color: #28a745
        }

        .custom-control-input.is-valid~.custom-control-indicator,
        .was-validated .custom-control-input:valid~.custom-control-indicator {
            background-color: rgba(40, 167, 69, .25)
        }

        .custom-control-input.is-valid~.custom-control-description,
        .was-validated .custom-control-input:valid~.custom-control-description {
            color: #28a745
        }

        .custom-file-input.is-valid~.custom-file-control,
        .was-validated .custom-file-input:valid~.custom-file-control {
            border-color: #28a745
        }

        .custom-file-input.is-valid~.custom-file-control::before,
        .was-validated .custom-file-input:valid~.custom-file-control::before {
            border-color: inherit
        }

        .custom-file-input.is-valid:focus,
        .was-validated .custom-file-input:valid:focus {
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
        }

        .custom-select.is-invalid,
        .form-control.is-invalid,
        .was-validated .custom-select:invalid,
        .was-validated .form-control:invalid {
            border-color: #dc3545
        }

        .custom-select.is-invalid:focus,
        .form-control.is-invalid:focus,
        .was-validated .custom-select:invalid:focus,
        .was-validated .form-control:invalid:focus {
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
        }

        .custom-select.is-invalid~.invalid-feedback,
        .custom-select.is-invalid~.invalid-tooltip,
        .form-control.is-invalid~.invalid-feedback,
        .form-control.is-invalid~.invalid-tooltip,
        .was-validated .custom-select:invalid~.invalid-feedback,
        .was-validated .custom-select:invalid~.invalid-tooltip,
        .was-validated .form-control:invalid~.invalid-feedback,
        .was-validated .form-control:invalid~.invalid-tooltip {
            display: block
        }

        .form-check-input.is-invalid+.form-check-label,
        .was-validated .form-check-input:invalid+.form-check-label {
            color: #dc3545
        }

        .custom-control-input.is-invalid~.custom-control-indicator,
        .was-validated .custom-control-input:invalid~.custom-control-indicator {
            background-color: rgba(220, 53, 69, .25)
        }

        .custom-control-input.is-invalid~.custom-control-description,
        .was-validated .custom-control-input:invalid~.custom-control-description {
            color: #dc3545
        }

        .custom-file-input.is-invalid~.custom-file-control,
        .was-validated .custom-file-input:invalid~.custom-file-control {
            border-color: #dc3545
        }

        .custom-file-input.is-invalid~.custom-file-control::before,
        .was-validated .custom-file-input:invalid~.custom-file-control::before {
            border-color: inherit
        }

        .custom-file-input.is-invalid:focus,
        .was-validated .custom-file-input:invalid:focus {
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
        }

        .form-inline {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -ms-flex-align: center;
            align-items: center
        }

        .form-inline .form-check {
            width: 100%
        }

        @media (min-width:576px) {
            .form-inline label {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-bottom: 0
            }
            .form-inline .form-group {
                display: -ms-flexbox;
                display: flex;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                -ms-flex-align: center;
                align-items: center;
                margin-bottom: 0
            }
            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle
            }
            .form-inline .form-control-plaintext {
                display: inline-block
            }
            .form-inline .input-group {
                width: auto
            }
            .form-inline .form-control-label {
                margin-bottom: 0;
                vertical-align: middle
            }
            .form-inline .form-check {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
                width: auto;
                margin-top: 0;
                margin-bottom: 0
            }
            .form-inline .form-check-label {
                padding-left: 0
            }
            .form-inline .form-check-input {
                position: relative;
                margin-top: 0;
                margin-right: .25rem;
                margin-left: 0
            }
            .form-inline .custom-control {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
                padding-left: 0
            }
            .form-inline .custom-control-indicator {
                position: static;
                display: inline-block;
                margin-right: .25rem;
                vertical-align: text-bottom
            }
            .form-inline .has-feedback .form-control-feedback {
                top: 0
            }
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .5rem .75rem;
            font-size: 1rem;
            line-height: 1.25;
            border-radius: .25rem;
            transition: all .15s ease-in-out
        }

        .btn:focus,
        .btn:hover {
            text-decoration: none
        }

        .btn.focus,
        .btn:focus {
            outline: 0;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, .25)
        }

        .btn.disabled,
        .btn:disabled {
            opacity: .65
        }

        .btn.active,
        .btn:active {
            background-image: none
        }

        a.btn.disabled,
        fieldset[disabled] a.btn {
            pointer-events: none
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc
        }

        .btn-primary.focus,
        .btn-primary:focus {
            box-shadow: 0 0 0 3px rgba(0, 123, 255, .5)
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-primary.active,
        .btn-primary:active,
        .show>.btn-primary.dropdown-toggle {
            background-color: #0069d9;
            background-image: none;
            border-color: #0062cc
        }

        .btn-secondary {
            color: #fff;
            background-color: #868e96;
            border-color: #868e96
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #727b84;
            border-color: #6c757d
        }

        .btn-secondary.focus,
        .btn-secondary:focus {
            box-shadow: 0 0 0 3px rgba(134, 142, 150, .5)
        }

        .btn-secondary.disabled,
        .btn-secondary:disabled {
            background-color: #868e96;
            border-color: #868e96
        }

        .btn-secondary.active,
        .btn-secondary:active,
        .show>.btn-secondary.dropdown-toggle {
            background-color: #727b84;
            background-image: none;
            border-color: #6c757d
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-success:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34
        }

        .btn-success.focus,
        .btn-success:focus {
            box-shadow: 0 0 0 3px rgba(40, 167, 69, .5)
        }

        .btn-success.disabled,
        .btn-success:disabled {
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-success.active,
        .btn-success:active,
        .show>.btn-success.dropdown-toggle {
            background-color: #218838;
            background-image: none;
            border-color: #1e7e34
        }

        .btn-info {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-info:hover {
            color: #fff;
            background-color: #138496;
            border-color: #117a8b
        }

        .btn-info.focus,
        .btn-info:focus {
            box-shadow: 0 0 0 3px rgba(23, 162, 184, .5)
        }

        .btn-info.disabled,
        .btn-info:disabled {
            background-color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-info.active,
        .btn-info:active,
        .show>.btn-info.dropdown-toggle {
            background-color: #138496;
            background-image: none;
            border-color: #117a8b
        }

        .btn-warning {
            color: #111;
            background-color: #ffc107;
            border-color: #ffc107
        }

        .btn-warning:hover {
            color: #111;
            background-color: #e0a800;
            border-color: #d39e00
        }

        .btn-warning.focus,
        .btn-warning:focus {
            box-shadow: 0 0 0 3px rgba(255, 193, 7, .5)
        }

        .btn-warning.disabled,
        .btn-warning:disabled {
            background-color: #ffc107;
            border-color: #ffc107
        }

        .btn-warning.active,
        .btn-warning:active,
        .show>.btn-warning.dropdown-toggle {
            background-color: #e0a800;
            background-image: none;
            border-color: #d39e00
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130
        }

        .btn-danger.focus,
        .btn-danger:focus {
            box-shadow: 0 0 0 3px rgba(220, 53, 69, .5)
        }

        .btn-danger.disabled,
        .btn-danger:disabled {
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-danger.active,
        .btn-danger:active,
        .show>.btn-danger.dropdown-toggle {
            background-color: #c82333;
            background-image: none;
            border-color: #bd2130
        }

        .btn-light {
            color: #111;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-light:hover {
            color: #111;
            background-color: #e2e6ea;
            border-color: #dae0e5
        }

        .btn-light.focus,
        .btn-light:focus {
            box-shadow: 0 0 0 3px rgba(248, 249, 250, .5)
        }

        .btn-light.disabled,
        .btn-light:disabled {
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-light.active,
        .btn-light:active,
        .show>.btn-light.dropdown-toggle {
            background-color: #e2e6ea;
            background-image: none;
            border-color: #dae0e5
        }

        .btn-dark {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #23272b;
            border-color: #1d2124
        }

        .btn-dark.focus,
        .btn-dark:focus {
            box-shadow: 0 0 0 3px rgba(52, 58, 64, .5)
        }

        .btn-dark.disabled,
        .btn-dark:disabled {
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-dark.active,
        .btn-dark:active,
        .show>.btn-dark.dropdown-toggle {
            background-color: #23272b;
            background-image: none;
            border-color: #1d2124
        }

        .btn-outline-primary {
            color: #007bff;
            background-color: transparent;
            background-image: none;
            border-color: #007bff
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-outline-primary.focus,
        .btn-outline-primary:focus {
            box-shadow: 0 0 0 3px rgba(0, 123, 255, .5)
        }

        .btn-outline-primary.disabled,
        .btn-outline-primary:disabled {
            color: #007bff;
            background-color: transparent
        }

        .btn-outline-primary.active,
        .btn-outline-primary:active,
        .show>.btn-outline-primary.dropdown-toggle {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-outline-secondary {
            color: #868e96;
            background-color: transparent;
            background-image: none;
            border-color: #868e96
        }

        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #868e96;
            border-color: #868e96
        }

        .btn-outline-secondary.focus,
        .btn-outline-secondary:focus {
            box-shadow: 0 0 0 3px rgba(134, 142, 150, .5)
        }

        .btn-outline-secondary.disabled,
        .btn-outline-secondary:disabled {
            color: #868e96;
            background-color: transparent
        }

        .btn-outline-secondary.active,
        .btn-outline-secondary:active,
        .show>.btn-outline-secondary.dropdown-toggle {
            color: #fff;
            background-color: #868e96;
            border-color: #868e96
        }

        .btn-outline-success {
            color: #28a745;
            background-color: transparent;
            background-image: none;
            border-color: #28a745
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-outline-success.focus,
        .btn-outline-success:focus {
            box-shadow: 0 0 0 3px rgba(40, 167, 69, .5)
        }

        .btn-outline-success.disabled,
        .btn-outline-success:disabled {
            color: #28a745;
            background-color: transparent
        }

        .btn-outline-success.active,
        .btn-outline-success:active,
        .show>.btn-outline-success.dropdown-toggle {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-outline-info {
            color: #17a2b8;
            background-color: transparent;
            background-image: none;
            border-color: #17a2b8
        }

        .btn-outline-info:hover {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-outline-info.focus,
        .btn-outline-info:focus {
            box-shadow: 0 0 0 3px rgba(23, 162, 184, .5)
        }

        .btn-outline-info.disabled,
        .btn-outline-info:disabled {
            color: #17a2b8;
            background-color: transparent
        }

        .btn-outline-info.active,
        .btn-outline-info:active,
        .show>.btn-outline-info.dropdown-toggle {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-outline-warning {
            color: #ffc107;
            background-color: transparent;
            background-image: none;
            border-color: #ffc107
        }

        .btn-outline-warning:hover {
            color: #fff;
            background-color: #ffc107;
            border-color: #ffc107
        }

        .btn-outline-warning.focus,
        .btn-outline-warning:focus {
            box-shadow: 0 0 0 3px rgba(255, 193, 7, .5)
        }

        .btn-outline-warning.disabled,
        .btn-outline-warning:disabled {
            color: #ffc107;
            background-color: transparent
        }

        .btn-outline-warning.active,
        .btn-outline-warning:active,
        .show>.btn-outline-warning.dropdown-toggle {
            color: #fff;
            background-color: #ffc107;
            border-color: #ffc107
        }

        .btn-outline-danger {
            color: #dc3545;
            background-color: transparent;
            background-image: none;
            border-color: #dc3545
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-outline-danger.focus,
        .btn-outline-danger:focus {
            box-shadow: 0 0 0 3px rgba(220, 53, 69, .5)
        }

        .btn-outline-danger.disabled,
        .btn-outline-danger:disabled {
            color: #dc3545;
            background-color: transparent
        }

        .btn-outline-danger.active,
        .btn-outline-danger:active,
        .show>.btn-outline-danger.dropdown-toggle {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-outline-light {
            color: #f8f9fa;
            background-color: transparent;
            background-image: none;
            border-color: #f8f9fa
        }

        .btn-outline-light:hover {
            color: #fff;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-outline-light.focus,
        .btn-outline-light:focus {
            box-shadow: 0 0 0 3px rgba(248, 249, 250, .5)
        }

        .btn-outline-light.disabled,
        .btn-outline-light:disabled {
            color: #f8f9fa;
            background-color: transparent
        }

        .btn-outline-light.active,
        .btn-outline-light:active,
        .show>.btn-outline-light.dropdown-toggle {
            color: #fff;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-outline-dark {
            color: #343a40;
            background-color: transparent;
            background-image: none;
            border-color: #343a40
        }

        .btn-outline-dark:hover {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-outline-dark.focus,
        .btn-outline-dark:focus {
            box-shadow: 0 0 0 3px rgba(52, 58, 64, .5)
        }

        .btn-outline-dark.disabled,
        .btn-outline-dark:disabled {
            color: #343a40;
            background-color: transparent
        }

        .btn-outline-dark.active,
        .btn-outline-dark:active,
        .show>.btn-outline-dark.dropdown-toggle {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-link {
            font-weight: 400;
            color: #007bff;
            border-radius: 0
        }

        .btn-link,
        .btn-link.active,
        .btn-link:active,
        .btn-link:disabled {
            background-color: transparent
        }

        .btn-link,
        .btn-link:active,
        .btn-link:focus {
            border-color: transparent;
            box-shadow: none
        }

        .btn-link:hover {
            border-color: transparent
        }

        .btn-link:focus,
        .btn-link:hover {
            color: #0056b3;
            text-decoration: underline;
            background-color: transparent
        }

        .btn-link:disabled {
            color: #868e96
        }

        .btn-link:disabled:focus,
        .btn-link:disabled:hover {
            text-decoration: none
        }

        .btn-group-lg>.btn,
        .btn-lg {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        .btn-group-sm>.btn,
        .btn-sm {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .btn-block {
            display: block;
            width: 100%
        }

        .btn-block+.btn-block {
            margin-top: .5rem
        }

        input[type=button].btn-block,
        input[type=reset].btn-block,
        input[type=submit].btn-block {
            width: 100%
        }

        .fade {
            opacity: 0;
            transition: opacity .15s linear
        }

        .fade.show {
            opacity: 1
        }

        .collapse {
            display: none
        }

        .collapse.show {
            display: block
        }

        tr.collapse.show {
            display: table-row
        }

        tbody.collapse.show {
            display: table-row-group
        }

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            transition: height .35s ease
        }

        .dropdown,
        .dropup {
            position: relative
        }

        .dropdown-toggle::after {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-left: .3em solid transparent
        }

        .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropup .dropdown-menu {
            margin-top: 0;
            margin-bottom: .125rem
        }

        .dropup .dropdown-toggle::after {
            border-top: 0;
            border-bottom: .3em solid
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: .5rem 0;
            margin: .125rem 0 0;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem
        }

        .dropdown-divider {
            height: 0;
            margin: .5rem 0;
            overflow: hidden;
            border-top: 1px solid #e9ecef
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: .25rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            white-space: nowrap;
            background: 0 0;
            border: 0
        }

        .dropdown-item:focus,
        .dropdown-item:hover {
            color: #16181b;
            text-decoration: none;
            background-color: #f8f9fa
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #007bff
        }

        .dropdown-item.disabled,
        .dropdown-item:disabled {
            color: #868e96;
            background-color: transparent
        }

        .show>a {
            outline: 0
        }

        .dropdown-menu.show {
            display: block
        }

        .dropdown-header {
            display: block;
            padding: .5rem 1.5rem;
            margin-bottom: 0;
            font-size: .875rem;
            color: #868e96;
            white-space: nowrap
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: -ms-inline-flexbox;
            display: inline-flex;
            vertical-align: middle
        }

        .btn-group-vertical>.btn,
        .btn-group>.btn {
            position: relative;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            margin-bottom: 0
        }

        .btn-group-vertical>.btn:hover,
        .btn-group>.btn:hover {
            z-index: 2
        }

        .btn-group-vertical>.btn.active,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn:focus,
        .btn-group>.btn.active,
        .btn-group>.btn:active,
        .btn-group>.btn:focus {
            z-index: 2
        }

        .btn-group .btn+.btn,
        .btn-group .btn+.btn-group,
        .btn-group .btn-group+.btn,
        .btn-group .btn-group+.btn-group,
        .btn-group-vertical .btn+.btn,
        .btn-group-vertical .btn+.btn-group,
        .btn-group-vertical .btn-group+.btn,
        .btn-group-vertical .btn-group+.btn-group {
            margin-left: -1px
        }

        .btn-toolbar {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .btn-toolbar .input-group {
            width: auto
        }

        .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
            border-radius: 0
        }

        .btn-group>.btn:first-child {
            margin-left: 0
        }

        .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group>.btn:last-child:not(:first-child),
        .btn-group>.dropdown-toggle:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group>.btn-group {
            float: left
        }

        .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
            border-radius: 0
        }

        .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
        .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn+.dropdown-toggle-split {
            padding-right: .5625rem;
            padding-left: .5625rem
        }

        .btn+.dropdown-toggle-split::after {
            margin-left: 0
        }

        .btn-group-sm>.btn+.dropdown-toggle-split,
        .btn-sm+.dropdown-toggle-split {
            padding-right: .375rem;
            padding-left: .375rem
        }

        .btn-group-lg>.btn+.dropdown-toggle-split,
        .btn-lg+.dropdown-toggle-split {
            padding-right: .75rem;
            padding-left: .75rem
        }

        .btn-group-vertical {
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-align: start;
            align-items: flex-start;
            -ms-flex-pack: center;
            justify-content: center
        }

        .btn-group-vertical .btn,
        .btn-group-vertical .btn-group {
            width: 100%
        }

        .btn-group-vertical>.btn+.btn,
        .btn-group-vertical>.btn+.btn-group,
        .btn-group-vertical>.btn-group+.btn,
        .btn-group-vertical>.btn-group+.btn-group {
            margin-top: -1px;
            margin-left: 0
        }

        .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
            border-radius: 0
        }

        .btn-group-vertical>.btn:first-child:not(:last-child) {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical>.btn:last-child:not(:first-child) {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
            border-radius: 0
        }

        .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
        .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        [data-toggle=buttons]>.btn input[type=checkbox],
        [data-toggle=buttons]>.btn input[type=radio],
        [data-toggle=buttons]>.btn-group>.btn input[type=checkbox],
        [data-toggle=buttons]>.btn-group>.btn input[type=radio] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none
        }

        .input-group {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .input-group .form-control {
            position: relative;
            z-index: 2;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 1%;
            margin-bottom: 0
        }

        .input-group .form-control:active,
        .input-group .form-control:focus,
        .input-group .form-control:hover {
            z-index: 3
        }

        .input-group .form-control,
        .input-group-addon,
        .input-group-btn {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center
        }

        .input-group .form-control:not(:first-child):not(:last-child),
        .input-group-addon:not(:first-child):not(:last-child),
        .input-group-btn:not(:first-child):not(:last-child) {
            border-radius: 0
        }

        .input-group-addon,
        .input-group-btn {
            white-space: nowrap;
            vertical-align: middle
        }

        .input-group-addon {
            padding: .5rem .75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.25;
            color: #495057;
            text-align: center;
            background-color: #e9ecef;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem
        }

        .input-group-addon.form-control-sm,
        .input-group-sm>.input-group-addon,
        .input-group-sm>.input-group-btn>.input-group-addon.btn {
            padding: .25rem .5rem;
            font-size: .875rem;
            border-radius: .2rem
        }

        .input-group-addon.form-control-lg,
        .input-group-lg>.input-group-addon,
        .input-group-lg>.input-group-btn>.input-group-addon.btn {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            border-radius: .3rem
        }

        .input-group-addon input[type=checkbox],
        .input-group-addon input[type=radio] {
            margin-top: 0
        }

        .input-group .form-control:not(:last-child),
        .input-group-addon:not(:last-child),
        .input-group-btn:not(:first-child)>.btn-group:not(:last-child)>.btn,
        .input-group-btn:not(:first-child)>.btn:not(:last-child):not(.dropdown-toggle),
        .input-group-btn:not(:last-child)>.btn,
        .input-group-btn:not(:last-child)>.btn-group>.btn,
        .input-group-btn:not(:last-child)>.dropdown-toggle {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group-addon:not(:last-child) {
            border-right: 0
        }

        .input-group .form-control:not(:first-child),
        .input-group-addon:not(:first-child),
        .input-group-btn:not(:first-child)>.btn,
        .input-group-btn:not(:first-child)>.btn-group>.btn,
        .input-group-btn:not(:first-child)>.dropdown-toggle,
        .input-group-btn:not(:last-child)>.btn-group:not(:first-child)>.btn,
        .input-group-btn:not(:last-child)>.btn:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .form-control+.input-group-addon:not(:first-child) {
            border-left: 0
        }

        .input-group-btn {
            position: relative;
            font-size: 0;
            white-space: nowrap
        }

        .input-group-btn>.btn {
            position: relative
        }

        .input-group-btn>.btn+.btn {
            margin-left: -1px
        }

        .input-group-btn>.btn:active,
        .input-group-btn>.btn:focus,
        .input-group-btn>.btn:hover {
            z-index: 3
        }

        .input-group-btn:not(:last-child)>.btn,
        .input-group-btn:not(:last-child)>.btn-group {
            margin-right: -1px
        }

        .input-group-btn:not(:first-child)>.btn,
        .input-group-btn:not(:first-child)>.btn-group {
            z-index: 2;
            margin-left: -1px
        }

        .input-group-btn:not(:first-child)>.btn-group:active,
        .input-group-btn:not(:first-child)>.btn-group:focus,
        .input-group-btn:not(:first-child)>.btn-group:hover,
        .input-group-btn:not(:first-child)>.btn:active,
        .input-group-btn:not(:first-child)>.btn:focus,
        .input-group-btn:not(:first-child)>.btn:hover {
            z-index: 3
        }

        .custom-control {
            position: relative;
            display: -ms-inline-flexbox;
            display: inline-flex;
            min-height: 1.5rem;
            padding-left: 1.5rem;
            margin-right: 1rem
        }

        .custom-control-input {
            position: absolute;
            z-index: -1;
            opacity: 0
        }

        .custom-control-input:checked~.custom-control-indicator {
            color: #fff;
            background-color: #007bff
        }

        .custom-control-input:focus~.custom-control-indicator {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px #007bff
        }

        .custom-control-input:active~.custom-control-indicator {
            color: #fff;
            background-color: #b3d7ff
        }

        .custom-control-input:disabled~.custom-control-indicator {
            background-color: #e9ecef
        }

        .custom-control-input:disabled~.custom-control-description {
            color: #868e96
        }

        .custom-control-indicator {
            position: absolute;
            top: .25rem;
            left: 0;
            display: block;
            width: 1rem;
            height: 1rem;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: #ddd;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 50% 50%
        }

        .custom-checkbox .custom-control-indicator {
            border-radius: .25rem
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-indicator {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E")
        }

        .custom-checkbox .custom-control-input:indeterminate~.custom-control-indicator {
            background-color: #007bff;
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E")
        }

        .custom-radio .custom-control-indicator {
            border-radius: 50%
        }

        .custom-radio .custom-control-input:checked~.custom-control-indicator {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E")
        }

        .custom-controls-stacked {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .custom-controls-stacked .custom-control {
            margin-bottom: .25rem
        }

        .custom-controls-stacked .custom-control+.custom-control {
            margin-left: 0
        }

        .custom-select {
            display: inline-block;
            max-width: 100%;
            height: calc(2.25rem + 2px);
            padding: .375rem 1.75rem .375rem .75rem;
            line-height: 1.25;
            color: #495057;
            vertical-align: middle;
            background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center;
            background-size: 8px 10px;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .custom-select:focus {
            border-color: #80bdff;
            outline: 0
        }

        .custom-select:focus::-ms-value {
            color: #495057;
            background-color: #fff
        }

        .custom-select:disabled {
            color: #868e96;
            background-color: #e9ecef
        }

        .custom-select::-ms-expand {
            opacity: 0
        }

        .custom-select-sm {
            height: calc(1.8125rem + 2px);
            padding-top: .375rem;
            padding-bottom: .375rem;
            font-size: 75%
        }

        .custom-file {
            position: relative;
            display: inline-block;
            max-width: 100%;
            height: 2.5rem;
            margin-bottom: 0
        }

        .custom-file-input {
            min-width: 14rem;
            max-width: 100%;
            height: 2.5rem;
            margin: 0;
            opacity: 0
        }

        .custom-file-control {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 5;
            height: 2.5rem;
            padding: .5rem 1rem;
            line-height: 1.5;
            color: #495057;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem
        }

        .custom-file-control:lang(en):empty::after {
            content: "Choose file..."
        }

        .custom-file-control::before {
            position: absolute;
            top: -1px;
            right: -1px;
            bottom: -1px;
            z-index: 6;
            display: block;
            height: 2.5rem;
            padding: .5rem 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #e9ecef;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: 0 .25rem .25rem 0
        }

        .custom-file-control:lang(en)::before {
            content: "Browse"
        }

        .nav {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .nav-link {
            display: block;
            padding: .5rem 1rem
        }

        .nav-link:focus,
        .nav-link:hover {
            text-decoration: none
        }

        .nav-link.disabled {
            color: #868e96
        }

        .nav-tabs {
            border-bottom: 1px solid #ddd
        }

        .nav-tabs .nav-item {
            margin-bottom: -1px
        }

        .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            border-color: #e9ecef #e9ecef #ddd
        }

        .nav-tabs .nav-link.disabled {
            color: #868e96;
            background-color: transparent;
            border-color: transparent
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #fff;
            border-color: #ddd #ddd #fff
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .nav-pills .nav-link {
            border-radius: .25rem
        }

        .nav-pills .nav-link.active,
        .show>.nav-pills .nav-link {
            color: #fff;
            background-color: #007bff
        }

        .nav-fill .nav-item {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            text-align: center
        }

        .nav-justified .nav-item {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            text-align: center
        }

        .tab-content>.tab-pane {
            display: none
        }

        .tab-content>.active {
            display: block
        }

        .navbar {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: .5rem 1rem
        }

        .navbar>.container,
        .navbar>.container-fluid {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .navbar-brand {
            display: inline-block;
            padding-top: .3125rem;
            padding-bottom: .3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap
        }

        .navbar-brand:focus,
        .navbar-brand:hover {
            text-decoration: none
        }

        .navbar-nav {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0
        }

        .navbar-nav .dropdown-menu {
            position: static;
            float: none
        }

        .navbar-text {
            display: inline-block;
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .navbar-collapse {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -ms-flex-align: center;
            align-items: center
        }

        .navbar-toggler {
            padding: .25rem .75rem;
            font-size: 1.25rem;
            line-height: 1;
            background: 0 0;
            border: 1px solid transparent;
            border-radius: .25rem
        }

        .navbar-toggler:focus,
        .navbar-toggler:hover {
            text-decoration: none
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            content: "";
            background: no-repeat center center;
            background-size: 100% 100%
        }

        @media (max-width:575px) {
            .navbar-expand-sm>.container,
            .navbar-expand-sm>.container-fluid {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:576px) {
            .navbar-expand-sm {
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start
            }
            .navbar-expand-sm .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row
            }
            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute
            }
            .navbar-expand-sm .navbar-nav .dropdown-menu-right {
                right: 0;
                left: auto
            }
            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }
            .navbar-expand-sm>.container,
            .navbar-expand-sm>.container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }
            .navbar-expand-sm .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important
            }
            .navbar-expand-sm .navbar-toggler {
                display: none
            }
        }

        @media (max-width:767px) {
            .navbar-expand-md>.container,
            .navbar-expand-md>.container-fluid {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:768px) {
            .navbar-expand-md {
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start
            }
            .navbar-expand-md .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row
            }
            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute
            }
            .navbar-expand-md .navbar-nav .dropdown-menu-right {
                right: 0;
                left: auto
            }
            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }
            .navbar-expand-md>.container,
            .navbar-expand-md>.container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }
            .navbar-expand-md .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important
            }
            .navbar-expand-md .navbar-toggler {
                display: none
            }
        }

        @media (max-width:991px) {
            .navbar-expand-lg>.container,
            .navbar-expand-lg>.container-fluid {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:992px) {
            .navbar-expand-lg {
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start
            }
            .navbar-expand-lg .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row
            }
            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute
            }
            .navbar-expand-lg .navbar-nav .dropdown-menu-right {
                right: 0;
                left: auto
            }
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }
            .navbar-expand-lg>.container,
            .navbar-expand-lg>.container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }
            .navbar-expand-lg .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important
            }
            .navbar-expand-lg .navbar-toggler {
                display: none
            }
        }

        @media (max-width:1199px) {
            .navbar-expand-xl>.container,
            .navbar-expand-xl>.container-fluid {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:1200px) {
            .navbar-expand-xl {
                -ms-flex-direction: row;
                flex-direction: row;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start
            }
            .navbar-expand-xl .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row
            }
            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute
            }
            .navbar-expand-xl .navbar-nav .dropdown-menu-right {
                right: 0;
                left: auto
            }
            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }
            .navbar-expand-xl>.container,
            .navbar-expand-xl>.container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }
            .navbar-expand-xl .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important
            }
            .navbar-expand-xl .navbar-toggler {
                display: none
            }
        }

        .navbar-expand {
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .navbar-expand>.container,
        .navbar-expand>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }

        .navbar-expand .navbar-nav {
            -ms-flex-direction: row;
            flex-direction: row
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand .navbar-nav .dropdown-menu-right {
            right: 0;
            left: auto
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand>.container,
        .navbar-expand>.container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .navbar-expand .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important
        }

        .navbar-expand .navbar-toggler {
            display: none
        }

        .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-brand:focus,
        .navbar-light .navbar-brand:hover {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, .5)
        }

        .navbar-light .navbar-nav .nav-link:focus,
        .navbar-light .navbar-nav .nav-link:hover {
            color: rgba(0, 0, 0, .7)
        }

        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(0, 0, 0, .3)
        }

        .navbar-light .navbar-nav .active>.nav-link,
        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .show>.nav-link {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, .5);
            border-color: rgba(0, 0, 0, .1)
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
        }

        .navbar-light .navbar-text {
            color: rgba(0, 0, 0, .5)
        }

        .navbar-dark .navbar-brand {
            color: #fff
        }

        .navbar-dark .navbar-brand:focus,
        .navbar-dark .navbar-brand:hover {
            color: #fff
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, .5)
        }

        .navbar-dark .navbar-nav .nav-link:focus,
        .navbar-dark .navbar-nav .nav-link:hover {
            color: rgba(255, 255, 255, .75)
        }

        .navbar-dark .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, .25)
        }

        .navbar-dark .navbar-nav .active>.nav-link,
        .navbar-dark .navbar-nav .nav-link.active,
        .navbar-dark .navbar-nav .nav-link.show,
        .navbar-dark .navbar-nav .show>.nav-link {
            color: #fff
        }

        .navbar-dark .navbar-toggler {
            color: rgba(255, 255, 255, .5);
            border-color: rgba(255, 255, 255, .1)
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
        }

        .navbar-dark .navbar-text {
            color: rgba(255, 255, 255, .5)
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem
        }

        .card-title {
            margin-bottom: .75rem
        }

        .card-subtitle {
            margin-top: -.375rem;
            margin-bottom: 0
        }

        .card-text:last-child {
            margin-bottom: 0
        }

        .card-link:hover {
            text-decoration: none
        }

        .card-link+.card-link {
            margin-left: 1.25rem
        }

        .card>.list-group:first-child .list-group-item:first-child {
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .card>.list-group:last-child .list-group-item:last-child {
            border-bottom-right-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(0, 0, 0, .125)
        }

        .card-header:first-child {
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
        }

        .card-footer {
            padding: .75rem 1.25rem;
            background-color: rgba(0, 0, 0, .03);
            border-top: 1px solid rgba(0, 0, 0, .125)
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
        }

        .card-header-tabs {
            margin-right: -.625rem;
            margin-bottom: -.75rem;
            margin-left: -.625rem;
            border-bottom: 0
        }

        .card-header-pills {
            margin-right: -.625rem;
            margin-left: -.625rem
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1.25rem
        }

        .card-img {
            width: 100%;
            border-radius: calc(.25rem - 1px)
        }

        .card-img-top {
            width: 100%;
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px)
        }

        .card-img-bottom {
            width: 100%;
            border-bottom-right-radius: calc(.25rem - 1px);
            border-bottom-left-radius: calc(.25rem - 1px)
        }

        @media (min-width:576px) {
            .card-deck {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                margin-right: -15px;
                margin-left: -15px
            }
            .card-deck .card {
                display: -ms-flexbox;
                display: flex;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-right: 15px;
                margin-left: 15px
            }
        }

        @media (min-width:576px) {
            .card-group {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap
            }
            .card-group .card {
                -ms-flex: 1 0 0%;
                flex: 1 0 0%
            }
            .card-group .card+.card {
                margin-left: 0;
                border-left: 0
            }
            .card-group .card:first-child {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0
            }
            .card-group .card:first-child .card-img-top {
                border-top-right-radius: 0
            }
            .card-group .card:first-child .card-img-bottom {
                border-bottom-right-radius: 0
            }
            .card-group .card:last-child {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0
            }
            .card-group .card:last-child .card-img-top {
                border-top-left-radius: 0
            }
            .card-group .card:last-child .card-img-bottom {
                border-bottom-left-radius: 0
            }
            .card-group .card:not(:first-child):not(:last-child) {
                border-radius: 0
            }
            .card-group .card:not(:first-child):not(:last-child) .card-img-bottom,
            .card-group .card:not(:first-child):not(:last-child) .card-img-top {
                border-radius: 0
            }
        }

        .card-columns .card {
            margin-bottom: .75rem
        }

        @media (min-width:576px) {
            .card-columns {
                -webkit-column-count: 3;
                column-count: 3;
                -webkit-column-gap: 1.25rem;
                column-gap: 1.25rem
            }
            .card-columns .card {
                display: inline-block;
                width: 100%
            }
        }

        .breadcrumb {
            padding: .75rem 1rem;
            margin-bottom: 1rem;
            list-style: none;
            background-color: #e9ecef;
            border-radius: .25rem
        }

        .breadcrumb::after {
            display: block;
            clear: both;
            content: ""
        }

        .breadcrumb-item {
            float: left
        }

        .breadcrumb-item+.breadcrumb-item::before {
            display: inline-block;
            padding-right: .5rem;
            padding-left: .5rem;
            color: #868e96;
            content: "/"
        }

        .breadcrumb-item+.breadcrumb-item:hover::before {
            text-decoration: underline
        }

        .breadcrumb-item+.breadcrumb-item:hover::before {
            text-decoration: none
        }

        .breadcrumb-item.active {
            color: #868e96
        }

        .pagination {
            display: -ms-flexbox;
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: .25rem
        }

        .page-item:first-child .page-link {
            margin-left: 0;
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .page-item:last-child .page-link {
            border-top-right-radius: .25rem;
            border-bottom-right-radius: .25rem
        }

        .page-item.active .page-link {
            z-index: 2;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .page-item.disabled .page-link {
            color: #868e96;
            pointer-events: none;
            background-color: #fff;
            border-color: #ddd
        }

        .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #007bff;
            background-color: #fff;
            border: 1px solid #ddd
        }

        .page-link:focus,
        .page-link:hover {
            color: #0056b3;
            text-decoration: none;
            background-color: #e9ecef;
            border-color: #ddd
        }

        .pagination-lg .page-link {
            padding: .75rem 1.5rem;
            font-size: 1.25rem;
            line-height: 1.5
        }

        .pagination-lg .page-item:first-child .page-link {
            border-top-left-radius: .3rem;
            border-bottom-left-radius: .3rem
        }

        .pagination-lg .page-item:last-child .page-link {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem
        }

        .pagination-sm .page-link {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5
        }

        .pagination-sm .page-item:first-child .page-link {
            border-top-left-radius: .2rem;
            border-bottom-left-radius: .2rem
        }

        .pagination-sm .page-item:last-child .page-link {
            border-top-right-radius: .2rem;
            border-bottom-right-radius: .2rem
        }

        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem
        }

        .badge:empty {
            display: none
        }

        .btn .badge {
            position: relative;
            top: -1px
        }

        .badge-pill {
            padding-right: .6em;
            padding-left: .6em;
            border-radius: 10rem
        }

        .badge-primary {
            color: #fff;
            background-color: #007bff
        }

        .badge-primary[href]:focus,
        .badge-primary[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #0062cc
        }

        .badge-secondary {
            color: #fff;
            background-color: #868e96
        }

        .badge-secondary[href]:focus,
        .badge-secondary[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #6c757d
        }

        .badge-success {
            color: #fff;
            background-color: #28a745
        }

        .badge-success[href]:focus,
        .badge-success[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #1e7e34
        }

        .badge-info {
            color: #fff;
            background-color: #17a2b8
        }

        .badge-info[href]:focus,
        .badge-info[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #117a8b
        }

        .badge-warning {
            color: #111;
            background-color: #ffc107
        }

        .badge-warning[href]:focus,
        .badge-warning[href]:hover {
            color: #111;
            text-decoration: none;
            background-color: #d39e00
        }

        .badge-danger {
            color: #fff;
            background-color: #dc3545
        }

        .badge-danger[href]:focus,
        .badge-danger[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #bd2130
        }

        .badge-light {
            color: #111;
            background-color: #f8f9fa
        }

        .badge-light[href]:focus,
        .badge-light[href]:hover {
            color: #111;
            text-decoration: none;
            background-color: #dae0e5
        }

        .badge-dark {
            color: #fff;
            background-color: #343a40
        }

        .badge-dark[href]:focus,
        .badge-dark[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #1d2124
        }

        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            background-color: #e9ecef;
            border-radius: .3rem
        }

        @media (min-width:576px) {
            .jumbotron {
                padding: 4rem 2rem
            }
        }

        .jumbotron-fluid {
            padding-right: 0;
            padding-left: 0;
            border-radius: 0
        }

        .alert {
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem
        }

        .alert-heading {
            color: inherit
        }

        .alert-link {
            font-weight: 700
        }

        .alert-dismissible .close {
            position: relative;
            top: -.75rem;
            right: -1.25rem;
            padding: .75rem 1.25rem;
            color: inherit
        }

        .alert-primary {
            color: #004085;
            background-color: #cce5ff;
            border-color: #b8daff
        }

        .alert-primary hr {
            border-top-color: #9fcdff
        }

        .alert-primary .alert-link {
            color: #002752
        }

        .alert-secondary {
            color: #464a4e;
            background-color: #e7e8ea;
            border-color: #dddfe2
        }

        .alert-secondary hr {
            border-top-color: #cfd2d6
        }

        .alert-secondary .alert-link {
            color: #2e3133
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb
        }

        .alert-success hr {
            border-top-color: #b1dfbb
        }

        .alert-success .alert-link {
            color: #0b2e13
        }

        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb
        }

        .alert-info hr {
            border-top-color: #abdde5
        }

        .alert-info .alert-link {
            color: #062c33
        }

        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba
        }

        .alert-warning hr {
            border-top-color: #ffe8a1
        }

        .alert-warning .alert-link {
            color: #533f03
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb
        }

        .alert-danger hr {
            border-top-color: #f1b0b7
        }

        .alert-danger .alert-link {
            color: #491217
        }

        .alert-light {
            color: #818182;
            background-color: #fefefe;
            border-color: #fdfdfe
        }

        .alert-light hr {
            border-top-color: #ececf6
        }

        .alert-light .alert-link {
            color: #686868
        }

        .alert-dark {
            color: #1b1e21;
            background-color: #d6d8d9;
            border-color: #c6c8ca
        }

        .alert-dark hr {
            border-top-color: #b9bbbe
        }

        .alert-dark .alert-link {
            color: #040505
        }

        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0
            }
            to {
                background-position: 0 0
            }
        }

        @keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0
            }
            to {
                background-position: 0 0
            }
        }

        .progress {
            display: -ms-flexbox;
            display: flex;
            overflow: hidden;
            font-size: .75rem;
            line-height: 1rem;
            text-align: center;
            background-color: #e9ecef;
            border-radius: .25rem
        }

        .progress-bar {
            height: 1rem;
            line-height: 1rem;
            color: #fff;
            background-color: #007bff;
            transition: width .6s ease
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-size: 1rem 1rem
        }

        .progress-bar-animated {
            -webkit-animation: progress-bar-stripes 1s linear infinite;
            animation: progress-bar-stripes 1s linear infinite
        }

        .media {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start
        }

        .media-body {
            -ms-flex: 1;
            flex: 1
        }

        .list-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0
        }

        .list-group-item-action {
            width: 100%;
            color: #495057;
            text-align: inherit
        }

        .list-group-item-action:focus,
        .list-group-item-action:hover {
            color: #495057;
            text-decoration: none;
            background-color: #f8f9fa
        }

        .list-group-item-action:active {
            color: #212529;
            background-color: #e9ecef
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: .75rem 1.25rem;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .125)
        }

        .list-group-item:first-child {
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .list-group-item:last-child {
            margin-bottom: 0;
            border-bottom-right-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .list-group-item:focus,
        .list-group-item:hover {
            text-decoration: none
        }

        .list-group-item.disabled,
        .list-group-item:disabled {
            color: #868e96;
            background-color: #fff
        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .list-group-flush .list-group-item {
            border-right: 0;
            border-left: 0;
            border-radius: 0
        }

        .list-group-flush:first-child .list-group-item:first-child {
            border-top: 0
        }

        .list-group-flush:last-child .list-group-item:last-child {
            border-bottom: 0
        }

        .list-group-item-primary {
            color: #004085;
            background-color: #b8daff
        }

        a.list-group-item-primary,
        button.list-group-item-primary {
            color: #004085
        }

        a.list-group-item-primary:focus,
        a.list-group-item-primary:hover,
        button.list-group-item-primary:focus,
        button.list-group-item-primary:hover {
            color: #004085;
            background-color: #9fcdff
        }

        a.list-group-item-primary.active,
        button.list-group-item-primary.active {
            color: #fff;
            background-color: #004085;
            border-color: #004085
        }

        .list-group-item-secondary {
            color: #464a4e;
            background-color: #dddfe2
        }

        a.list-group-item-secondary,
        button.list-group-item-secondary {
            color: #464a4e
        }

        a.list-group-item-secondary:focus,
        a.list-group-item-secondary:hover,
        button.list-group-item-secondary:focus,
        button.list-group-item-secondary:hover {
            color: #464a4e;
            background-color: #cfd2d6
        }

        a.list-group-item-secondary.active,
        button.list-group-item-secondary.active {
            color: #fff;
            background-color: #464a4e;
            border-color: #464a4e
        }

        .list-group-item-success {
            color: #155724;
            background-color: #c3e6cb
        }

        a.list-group-item-success,
        button.list-group-item-success {
            color: #155724
        }

        a.list-group-item-success:focus,
        a.list-group-item-success:hover,
        button.list-group-item-success:focus,
        button.list-group-item-success:hover {
            color: #155724;
            background-color: #b1dfbb
        }

        a.list-group-item-success.active,
        button.list-group-item-success.active {
            color: #fff;
            background-color: #155724;
            border-color: #155724
        }

        .list-group-item-info {
            color: #0c5460;
            background-color: #bee5eb
        }

        a.list-group-item-info,
        button.list-group-item-info {
            color: #0c5460
        }

        a.list-group-item-info:focus,
        a.list-group-item-info:hover,
        button.list-group-item-info:focus,
        button.list-group-item-info:hover {
            color: #0c5460;
            background-color: #abdde5
        }

        a.list-group-item-info.active,
        button.list-group-item-info.active {
            color: #fff;
            background-color: #0c5460;
            border-color: #0c5460
        }

        .list-group-item-warning {
            color: #856404;
            background-color: #ffeeba
        }

        a.list-group-item-warning,
        button.list-group-item-warning {
            color: #856404
        }

        a.list-group-item-warning:focus,
        a.list-group-item-warning:hover,
        button.list-group-item-warning:focus,
        button.list-group-item-warning:hover {
            color: #856404;
            background-color: #ffe8a1
        }

        a.list-group-item-warning.active,
        button.list-group-item-warning.active {
            color: #fff;
            background-color: #856404;
            border-color: #856404
        }

        .list-group-item-danger {
            color: #721c24;
            background-color: #f5c6cb
        }

        a.list-group-item-danger,
        button.list-group-item-danger {
            color: #721c24
        }

        a.list-group-item-danger:focus,
        a.list-group-item-danger:hover,
        button.list-group-item-danger:focus,
        button.list-group-item-danger:hover {
            color: #721c24;
            background-color: #f1b0b7
        }

        a.list-group-item-danger.active,
        button.list-group-item-danger.active {
            color: #fff;
            background-color: #721c24;
            border-color: #721c24
        }

        .list-group-item-light {
            color: #818182;
            background-color: #fdfdfe
        }

        a.list-group-item-light,
        button.list-group-item-light {
            color: #818182
        }

        a.list-group-item-light:focus,
        a.list-group-item-light:hover,
        button.list-group-item-light:focus,
        button.list-group-item-light:hover {
            color: #818182;
            background-color: #ececf6
        }

        a.list-group-item-light.active,
        button.list-group-item-light.active {
            color: #fff;
            background-color: #818182;
            border-color: #818182
        }

        .list-group-item-dark {
            color: #1b1e21;
            background-color: #c6c8ca
        }

        a.list-group-item-dark,
        button.list-group-item-dark {
            color: #1b1e21
        }

        a.list-group-item-dark:focus,
        a.list-group-item-dark:hover,
        button.list-group-item-dark:focus,
        button.list-group-item-dark:hover {
            color: #1b1e21;
            background-color: #b9bbbe
        }

        a.list-group-item-dark.active,
        button.list-group-item-dark.active {
            color: #fff;
            background-color: #1b1e21;
            border-color: #1b1e21
        }

        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5
        }

        .close:focus,
        .close:hover {
            color: #000;
            text-decoration: none;
            opacity: .75
        }

        button.close {
            padding: 0;
            background: 0 0;
            border: 0;
            -webkit-appearance: none
        }

        .modal-open {
            overflow: hidden
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
            outline: 0
        }

        .modal.fade .modal-dialog {
            transition: -webkit-transform .3s ease-out;
            transition: transform .3s ease-out;
            transition: transform .3s ease-out, -webkit-transform .3s ease-out;
            -webkit-transform: translate(0, -25%);
            transform: translate(0, -25%)
        }

        .modal.show .modal-dialog {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0)
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: 10px
        }

        .modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000
        }

        .modal-backdrop.fade {
            opacity: 0
        }

        .modal-backdrop.show {
            opacity: .5
        }

        .modal-header {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 15px;
            border-bottom: 1px solid #e9ecef
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5
        }

        .modal-body {
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 15px
        }

        .modal-footer {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding: 15px;
            border-top: 1px solid #e9ecef
        }

        .modal-footer>:not(:first-child) {
            margin-left: .25rem
        }

        .modal-footer>:not(:last-child) {
            margin-right: .25rem
        }

        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        @media (min-width:576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 30px auto
            }
            .modal-sm {
                max-width: 300px
            }
        }

        @media (min-width:992px) {
            .modal-lg {
                max-width: 800px
            }
        }

        .tooltip {
            position: absolute;
            z-index: 1070;
            display: block;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: .875rem;
            word-wrap: break-word;
            opacity: 0
        }

        .tooltip.show {
            opacity: .9
        }

        .tooltip .arrow {
            position: absolute;
            display: block;
            width: 5px;
            height: 5px
        }

        .tooltip.bs-tooltip-auto[x-placement^=top],
        .tooltip.bs-tooltip-top {
            padding: 5px 0
        }

        .tooltip.bs-tooltip-auto[x-placement^=top] .arrow,
        .tooltip.bs-tooltip-top .arrow {
            bottom: 0
        }

        .tooltip.bs-tooltip-auto[x-placement^=top] .arrow::before,
        .tooltip.bs-tooltip-top .arrow::before {
            margin-left: -3px;
            content: "";
            border-width: 5px 5px 0;
            border-top-color: #000
        }

        .tooltip.bs-tooltip-auto[x-placement^=right],
        .tooltip.bs-tooltip-right {
            padding: 0 5px
        }

        .tooltip.bs-tooltip-auto[x-placement^=right] .arrow,
        .tooltip.bs-tooltip-right .arrow {
            left: 0
        }

        .tooltip.bs-tooltip-auto[x-placement^=right] .arrow::before,
        .tooltip.bs-tooltip-right .arrow::before {
            margin-top: -3px;
            content: "";
            border-width: 5px 5px 5px 0;
            border-right-color: #000
        }

        .tooltip.bs-tooltip-auto[x-placement^=bottom],
        .tooltip.bs-tooltip-bottom {
            padding: 5px 0
        }

        .tooltip.bs-tooltip-auto[x-placement^=bottom] .arrow,
        .tooltip.bs-tooltip-bottom .arrow {
            top: 0
        }

        .tooltip.bs-tooltip-auto[x-placement^=bottom] .arrow::before,
        .tooltip.bs-tooltip-bottom .arrow::before {
            margin-left: -3px;
            content: "";
            border-width: 0 5px 5px;
            border-bottom-color: #000
        }

        .tooltip.bs-tooltip-auto[x-placement^=left],
        .tooltip.bs-tooltip-left {
            padding: 0 5px
        }

        .tooltip.bs-tooltip-auto[x-placement^=left] .arrow,
        .tooltip.bs-tooltip-left .arrow {
            right: 0
        }

        .tooltip.bs-tooltip-auto[x-placement^=left] .arrow::before,
        .tooltip.bs-tooltip-left .arrow::before {
            right: 0;
            margin-top: -3px;
            content: "";
            border-width: 5px 0 5px 5px;
            border-left-color: #000
        }

        .tooltip .arrow::before {
            position: absolute;
            border-color: transparent;
            border-style: solid
        }

        .tooltip-inner {
            max-width: 200px;
            padding: 3px 8px;
            color: #fff;
            text-align: center;
            background-color: #000;
            border-radius: .25rem
        }

        .popover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1060;
            display: block;
            max-width: 276px;
            padding: 1px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: .875rem;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem
        }

        .popover .arrow {
            position: absolute;
            display: block;
            width: 10px;
            height: 5px
        }

        .popover .arrow::after,
        .popover .arrow::before {
            position: absolute;
            display: block;
            border-color: transparent;
            border-style: solid
        }

        .popover .arrow::before {
            content: "";
            border-width: 11px
        }

        .popover .arrow::after {
            content: "";
            border-width: 11px
        }

        .popover.bs-popover-auto[x-placement^=top],
        .popover.bs-popover-top {
            margin-bottom: 10px
        }

        .popover.bs-popover-auto[x-placement^=top] .arrow,
        .popover.bs-popover-top .arrow {
            bottom: 0
        }

        .popover.bs-popover-auto[x-placement^=top] .arrow::after,
        .popover.bs-popover-auto[x-placement^=top] .arrow::before,
        .popover.bs-popover-top .arrow::after,
        .popover.bs-popover-top .arrow::before {
            border-bottom-width: 0
        }

        .popover.bs-popover-auto[x-placement^=top] .arrow::before,
        .popover.bs-popover-top .arrow::before {
            bottom: -11px;
            margin-left: -6px;
            border-top-color: rgba(0, 0, 0, .25)
        }

        .popover.bs-popover-auto[x-placement^=top] .arrow::after,
        .popover.bs-popover-top .arrow::after {
            bottom: -10px;
            margin-left: -6px;
            border-top-color: #fff
        }

        .popover.bs-popover-auto[x-placement^=right],
        .popover.bs-popover-right {
            margin-left: 10px
        }

        .popover.bs-popover-auto[x-placement^=right] .arrow,
        .popover.bs-popover-right .arrow {
            left: 0
        }

        .popover.bs-popover-auto[x-placement^=right] .arrow::after,
        .popover.bs-popover-auto[x-placement^=right] .arrow::before,
        .popover.bs-popover-right .arrow::after,
        .popover.bs-popover-right .arrow::before {
            margin-top: -8px;
            border-left-width: 0
        }

        .popover.bs-popover-auto[x-placement^=right] .arrow::before,
        .popover.bs-popover-right .arrow::before {
            left: -11px;
            border-right-color: rgba(0, 0, 0, .25)
        }

        .popover.bs-popover-auto[x-placement^=right] .arrow::after,
        .popover.bs-popover-right .arrow::after {
            left: -10px;
            border-right-color: #fff
        }

        .popover.bs-popover-auto[x-placement^=bottom],
        .popover.bs-popover-bottom {
            margin-top: 10px
        }

        .popover.bs-popover-auto[x-placement^=bottom] .arrow,
        .popover.bs-popover-bottom .arrow {
            top: 0
        }

        .popover.bs-popover-auto[x-placement^=bottom] .arrow::after,
        .popover.bs-popover-auto[x-placement^=bottom] .arrow::before,
        .popover.bs-popover-bottom .arrow::after,
        .popover.bs-popover-bottom .arrow::before {
            margin-left: -7px;
            border-top-width: 0
        }

        .popover.bs-popover-auto[x-placement^=bottom] .arrow::before,
        .popover.bs-popover-bottom .arrow::before {
            top: -11px;
            border-bottom-color: rgba(0, 0, 0, .25)
        }

        .popover.bs-popover-auto[x-placement^=bottom] .arrow::after,
        .popover.bs-popover-bottom .arrow::after {
            top: -10px;
            border-bottom-color: #fff
        }

        .popover.bs-popover-auto[x-placement^=bottom] .popover-header::before,
        .popover.bs-popover-bottom .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 20px;
            margin-left: -10px;
            content: "";
            border-bottom: 1px solid #f7f7f7
        }

        .popover.bs-popover-auto[x-placement^=left],
        .popover.bs-popover-left {
            margin-right: 10px
        }

        .popover.bs-popover-auto[x-placement^=left] .arrow,
        .popover.bs-popover-left .arrow {
            right: 0
        }

        .popover.bs-popover-auto[x-placement^=left] .arrow::after,
        .popover.bs-popover-auto[x-placement^=left] .arrow::before,
        .popover.bs-popover-left .arrow::after,
        .popover.bs-popover-left .arrow::before {
            margin-top: -8px;
            border-right-width: 0
        }

        .popover.bs-popover-auto[x-placement^=left] .arrow::before,
        .popover.bs-popover-left .arrow::before {
            right: -11px;
            border-left-color: rgba(0, 0, 0, .25)
        }

        .popover.bs-popover-auto[x-placement^=left] .arrow::after,
        .popover.bs-popover-left .arrow::after {
            right: -10px;
            border-left-color: #fff
        }

        .popover-header {
            padding: 8px 14px;
            margin-bottom: 0;
            font-size: 1rem;
            color: inherit;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ebebeb;
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px)
        }

        .popover-header:empty {
            display: none
        }

        .popover-body {
            padding: 9px 14px;
            color: #212529
        }

        .carousel {
            position: relative
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden
        }

        .carousel-item {
            position: relative;
            display: none;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            transition: -webkit-transform .6s ease;
            transition: transform .6s ease;
            transition: transform .6s ease, -webkit-transform .6s ease;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000px;
            perspective: 1000px
        }

        .carousel-item-next,
        .carousel-item-prev,
        .carousel-item.active {
            display: block
        }

        .carousel-item-next,
        .carousel-item-prev {
            position: absolute;
            top: 0
        }

        .carousel-item-next.carousel-item-left,
        .carousel-item-prev.carousel-item-right {
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }

        @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
            .carousel-item-next.carousel-item-left,
            .carousel-item-prev.carousel-item-right {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        .active.carousel-item-right,
        .carousel-item-next {
            -webkit-transform: translateX(100%);
            transform: translateX(100%)
        }

        @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
            .active.carousel-item-right,
            .carousel-item-next {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }

        .active.carousel-item-left,
        .carousel-item-prev {
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%)
        }

        @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
            .active.carousel-item-left,
            .carousel-item-prev {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
        }

        .carousel-control-next,
        .carousel-control-prev {
            position: absolute;
            top: 0;
            bottom: 0;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 15%;
            color: #fff;
            text-align: center;
            opacity: .5
        }

        .carousel-control-next:focus,
        .carousel-control-next:hover,
        .carousel-control-prev:focus,
        .carousel-control-prev:hover {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: .9
        }

        .carousel-control-prev {
            left: 0
        }

        .carousel-control-next {
            right: 0
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: transparent no-repeat center center;
            background-size: 100% 100%
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M4 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M1.5 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 10px;
            left: 0;
            z-index: 15;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            padding-left: 0;
            margin-right: 15%;
            margin-left: 15%;
            list-style: none
        }

        .carousel-indicators li {
            position: relative;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            background-color: rgba(255, 255, 255, .5)
        }

        .carousel-indicators li::before {
            position: absolute;
            top: -10px;
            left: 0;
            display: inline-block;
            width: 100%;
            height: 10px;
            content: ""
        }

        .carousel-indicators li::after {
            position: absolute;
            bottom: -10px;
            left: 0;
            display: inline-block;
            width: 100%;
            height: 10px;
            content: ""
        }

        .carousel-indicators .active {
            background-color: #fff
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 20px;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center
        }

        .align-baseline {
            vertical-align: baseline !important
        }

        .align-top {
            vertical-align: top !important
        }

        .align-middle {
            vertical-align: middle !important
        }

        .align-bottom {
            vertical-align: bottom !important
        }

        .align-text-bottom {
            vertical-align: text-bottom !important
        }

        .align-text-top {
            vertical-align: text-top !important
        }

        .bg-primary {
            background-color: #007bff !important
        }

        a.bg-primary:focus,
        a.bg-primary:hover {
            background-color: #0062cc !important
        }

        .bg-secondary {
            background-color: #868e96 !important
        }

        a.bg-secondary:focus,
        a.bg-secondary:hover {
            background-color: #6c757d !important
        }

        .bg-success {
            background-color: #28a745 !important
        }

        a.bg-success:focus,
        a.bg-success:hover {
            background-color: #1e7e34 !important
        }

        .bg-info {
            background-color: #17a2b8 !important
        }

        a.bg-info:focus,
        a.bg-info:hover {
            background-color: #117a8b !important
        }

        .bg-warning {
            background-color: #ffc107 !important
        }

        a.bg-warning:focus,
        a.bg-warning:hover {
            background-color: #d39e00 !important
        }

        .bg-danger {
            background-color: #dc3545 !important
        }

        a.bg-danger:focus,
        a.bg-danger:hover {
            background-color: #bd2130 !important
        }

        .bg-light {
            background-color: #f8f9fa !important
        }

        a.bg-light:focus,
        a.bg-light:hover {
            background-color: #dae0e5 !important
        }

        .bg-dark {
            background-color: #343a40 !important
        }

        a.bg-dark:focus,
        a.bg-dark:hover {
            background-color: #1d2124 !important
        }

        .bg-white {
            background-color: #fff !important
        }

        .bg-transparent {
            background-color: transparent !important
        }

        .border {
            border: 1px solid #e9ecef !important
        }

        .border-0 {
            border: 0 !important
        }

        .border-top-0 {
            border-top: 0 !important
        }

        .border-right-0 {
            border-right: 0 !important
        }

        .border-bottom-0 {
            border-bottom: 0 !important
        }

        .border-left-0 {
            border-left: 0 !important
        }

        .border-primary {
            border-color: #007bff !important
        }

        .border-secondary {
            border-color: #868e96 !important
        }

        .border-success {
            border-color: #28a745 !important
        }

        .border-info {
            border-color: #17a2b8 !important
        }

        .border-warning {
            border-color: #ffc107 !important
        }

        .border-danger {
            border-color: #dc3545 !important
        }

        .border-light {
            border-color: #f8f9fa !important
        }

        .border-dark {
            border-color: #343a40 !important
        }

        .border-white {
            border-color: #fff !important
        }

        .rounded {
            border-radius: .25rem !important
        }

        .rounded-top {
            border-top-left-radius: .25rem !important;
            border-top-right-radius: .25rem !important
        }

        .rounded-right {
            border-top-right-radius: .25rem !important;
            border-bottom-right-radius: .25rem !important
        }

        .rounded-bottom {
            border-bottom-right-radius: .25rem !important;
            border-bottom-left-radius: .25rem !important
        }

        .rounded-left {
            border-top-left-radius: .25rem !important;
            border-bottom-left-radius: .25rem !important
        }

        .rounded-circle {
            border-radius: 50%
        }

        .rounded-0 {
            border-radius: 0
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: ""
        }

        .d-none {
            display: none !important
        }

        .d-inline {
            display: inline !important
        }

        .d-inline-block {
            display: inline-block !important
        }

        .d-block {
            display: block !important
        }

        .d-table {
            display: table !important
        }

        .d-table-cell {
            display: table-cell !important
        }

        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important
        }

        .d-inline-flex {
            display: -ms-inline-flexbox !important;
            display: inline-flex !important
        }

        @media (min-width:576px) {
            .d-sm-none {
                display: none !important
            }
            .d-sm-inline {
                display: inline !important
            }
            .d-sm-inline-block {
                display: inline-block !important
            }
            .d-sm-block {
                display: block !important
            }
            .d-sm-table {
                display: table !important
            }
            .d-sm-table-cell {
                display: table-cell !important
            }
            .d-sm-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }
            .d-sm-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media (min-width:768px) {
            .d-md-none {
                display: none !important
            }
            .d-md-inline {
                display: inline !important
            }
            .d-md-inline-block {
                display: inline-block !important
            }
            .d-md-block {
                display: block !important
            }
            .d-md-table {
                display: table !important
            }
            .d-md-table-cell {
                display: table-cell !important
            }
            .d-md-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }
            .d-md-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media (min-width:992px) {
            .d-lg-none {
                display: none !important
            }
            .d-lg-inline {
                display: inline !important
            }
            .d-lg-inline-block {
                display: inline-block !important
            }
            .d-lg-block {
                display: block !important
            }
            .d-lg-table {
                display: table !important
            }
            .d-lg-table-cell {
                display: table-cell !important
            }
            .d-lg-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }
            .d-lg-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media (min-width:1200px) {
            .d-xl-none {
                display: none !important
            }
            .d-xl-inline {
                display: inline !important
            }
            .d-xl-inline-block {
                display: inline-block !important
            }
            .d-xl-block {
                display: block !important
            }
            .d-xl-table {
                display: table !important
            }
            .d-xl-table-cell {
                display: table-cell !important
            }
            .d-xl-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }
            .d-xl-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        .d-print-block {
            display: none !important
        }

        @media print {
            .d-print-block {
                display: block !important
            }
        }

        .d-print-inline {
            display: none !important
        }

        @media print {
            .d-print-inline {
                display: inline !important
            }
        }

        .d-print-inline-block {
            display: none !important
        }

        @media print {
            .d-print-inline-block {
                display: inline-block !important
            }
        }

        @media print {
            .d-print-none {
                display: none !important
            }
        }

        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden
        }

        .embed-responsive::before {
            display: block;
            content: ""
        }

        .embed-responsive .embed-responsive-item,
        .embed-responsive embed,
        .embed-responsive iframe,
        .embed-responsive object,
        .embed-responsive video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0
        }

        .embed-responsive-21by9::before {
            padding-top: 42.857143%
        }

        .embed-responsive-16by9::before {
            padding-top: 56.25%
        }

        .embed-responsive-4by3::before {
            padding-top: 75%
        }

        .embed-responsive-1by1::before {
            padding-top: 100%
        }

        .flex-row {
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .flex-column {
            -ms-flex-direction: column !important;
            flex-direction: column !important
        }

        .flex-row-reverse {
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important
        }

        .flex-column-reverse {
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important
        }

        .flex-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important
        }

        .flex-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important
        }

        .flex-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important
        }

        .justify-content-start {
            -ms-flex-pack: start !important;
            justify-content: flex-start !important
        }

        .justify-content-end {
            -ms-flex-pack: end !important;
            justify-content: flex-end !important
        }

        .justify-content-center {
            -ms-flex-pack: center !important;
            justify-content: center !important
        }

        .justify-content-between {
            -ms-flex-pack: justify !important;
            justify-content: space-between !important
        }

        .justify-content-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important
        }

        .align-items-start {
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .align-items-end {
            -ms-flex-align: end !important;
            align-items: flex-end !important
        }

        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-items-baseline {
            -ms-flex-align: baseline !important;
            align-items: baseline !important
        }

        .align-items-stretch {
            -ms-flex-align: stretch !important;
            align-items: stretch !important
        }

        .align-content-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important
        }

        .align-content-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important
        }

        .align-content-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }

        .align-content-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important
        }

        .align-content-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important
        }

        .align-self-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important
        }

        .align-self-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important
        }

        .align-self-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important
        }

        .align-self-center {
            -ms-flex-item-align: center !important;
            align-self: center !important
        }

        .align-self-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important
        }

        .align-self-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important
        }

        @media (min-width:576px) {
            .flex-sm-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }
            .flex-sm-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }
            .flex-sm-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }
            .flex-sm-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }
            .flex-sm-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }
            .flex-sm-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }
            .flex-sm-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }
            .justify-content-sm-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }
            .justify-content-sm-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }
            .justify-content-sm-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }
            .justify-content-sm-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }
            .justify-content-sm-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }
            .align-items-sm-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }
            .align-items-sm-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }
            .align-items-sm-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }
            .align-items-sm-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }
            .align-items-sm-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }
            .align-content-sm-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }
            .align-content-sm-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }
            .align-content-sm-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }
            .align-content-sm-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }
            .align-content-sm-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }
            .align-content-sm-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }
            .align-self-sm-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }
            .align-self-sm-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }
            .align-self-sm-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }
            .align-self-sm-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }
            .align-self-sm-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }
            .align-self-sm-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }
        }

        @media (min-width:768px) {
            .flex-md-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }
            .flex-md-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }
            .flex-md-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }
            .flex-md-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }
            .flex-md-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }
            .flex-md-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }
            .flex-md-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }
            .justify-content-md-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }
            .justify-content-md-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }
            .justify-content-md-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }
            .justify-content-md-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }
            .justify-content-md-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }
            .align-items-md-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }
            .align-items-md-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }
            .align-items-md-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }
            .align-items-md-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }
            .align-items-md-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }
            .align-content-md-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }
            .align-content-md-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }
            .align-content-md-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }
            .align-content-md-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }
            .align-content-md-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }
            .align-content-md-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }
            .align-self-md-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }
            .align-self-md-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }
            .align-self-md-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }
            .align-self-md-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }
            .align-self-md-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }
            .align-self-md-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }
        }

        @media (min-width:992px) {
            .flex-lg-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }
            .flex-lg-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }
            .flex-lg-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }
            .flex-lg-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }
            .flex-lg-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }
            .flex-lg-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }
            .flex-lg-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }
            .justify-content-lg-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }
            .justify-content-lg-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }
            .justify-content-lg-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }
            .justify-content-lg-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }
            .justify-content-lg-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }
            .align-items-lg-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }
            .align-items-lg-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }
            .align-items-lg-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }
            .align-items-lg-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }
            .align-items-lg-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }
            .align-content-lg-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }
            .align-content-lg-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }
            .align-content-lg-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }
            .align-content-lg-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }
            .align-content-lg-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }
            .align-content-lg-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }
            .align-self-lg-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }
            .align-self-lg-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }
            .align-self-lg-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }
            .align-self-lg-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }
            .align-self-lg-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }
            .align-self-lg-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }
        }

        @media (min-width:1200px) {
            .flex-xl-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }
            .flex-xl-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }
            .flex-xl-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }
            .flex-xl-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }
            .flex-xl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }
            .flex-xl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }
            .flex-xl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }
            .justify-content-xl-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }
            .justify-content-xl-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }
            .justify-content-xl-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }
            .justify-content-xl-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }
            .justify-content-xl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }
            .align-items-xl-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }
            .align-items-xl-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }
            .align-items-xl-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }
            .align-items-xl-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }
            .align-items-xl-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }
            .align-content-xl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }
            .align-content-xl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }
            .align-content-xl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }
            .align-content-xl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }
            .align-content-xl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }
            .align-content-xl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }
            .align-self-xl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }
            .align-self-xl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }
            .align-self-xl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }
            .align-self-xl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }
            .align-self-xl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }
            .align-self-xl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }
        }

        .float-left {
            float: left !important
        }

        .float-right {
            float: right !important
        }

        .float-none {
            float: none !important
        }

        @media (min-width:576px) {
            .float-sm-left {
                float: left !important
            }
            .float-sm-right {
                float: right !important
            }
            .float-sm-none {
                float: none !important
            }
        }

        @media (min-width:768px) {
            .float-md-left {
                float: left !important
            }
            .float-md-right {
                float: right !important
            }
            .float-md-none {
                float: none !important
            }
        }

        @media (min-width:992px) {
            .float-lg-left {
                float: left !important
            }
            .float-lg-right {
                float: right !important
            }
            .float-lg-none {
                float: none !important
            }
        }

        @media (min-width:1200px) {
            .float-xl-left {
                float: left !important
            }
            .float-xl-right {
                float: right !important
            }
            .float-xl-none {
                float: none !important
            }
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030
        }

        @supports ((position:-webkit-sticky) or (position:sticky)) {
            .sticky-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            border: 0
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            overflow: visible;
            clip: auto;
            white-space: normal;
            -webkit-clip-path: none;
            clip-path: none
        }

        .w-25 {
            width: 25% !important
        }

        .w-50 {
            width: 50% !important
        }

        .w-75 {
            width: 75% !important
        }

        .w-100 {
            width: 100% !important
        }

        .h-25 {
            height: 25% !important
        }

        .h-50 {
            height: 50% !important
        }

        .h-75 {
            height: 75% !important
        }

        .h-100 {
            height: 100% !important
        }

        .mw-100 {
            max-width: 100% !important
        }

        .mh-100 {
            max-height: 100% !important
        }

        .m-0 {
            margin: 0 !important
        }

        .mt-0 {
            margin-top: 0 !important
        }

        .mr-0 {
            margin-right: 0 !important
        }

        .mb-0 {
            margin-bottom: 0 !important
        }

        .ml-0 {
            margin-left: 0 !important
        }

        .mx-0 {
            margin-right: 0 !important;
            margin-left: 0 !important
        }

        .my-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .m-1 {
            margin: .25rem !important
        }

        .mt-1 {
            margin-top: .25rem !important
        }

        .mr-1 {
            margin-right: .25rem !important
        }

        .mb-1 {
            margin-bottom: .25rem !important
        }

        .ml-1 {
            margin-left: .25rem !important
        }

        .mx-1 {
            margin-right: .25rem !important;
            margin-left: .25rem !important
        }

        .my-1 {
            margin-top: .25rem !important;
            margin-bottom: .25rem !important
        }

        .m-2 {
            margin: .5rem !important
        }

        .mt-2 {
            margin-top: .5rem !important
        }

        .mr-2 {
            margin-right: .5rem !important
        }

        .mb-2 {
            margin-bottom: .5rem !important
        }

        .ml-2 {
            margin-left: .5rem !important
        }

        .mx-2 {
            margin-right: .5rem !important;
            margin-left: .5rem !important
        }

        .my-2 {
            margin-top: .5rem !important;
            margin-bottom: .5rem !important
        }

        .m-3 {
            margin: 1rem !important
        }

        .mt-3 {
            margin-top: 1rem !important
        }

        .mr-3 {
            margin-right: 1rem !important
        }

        .mb-3 {
            margin-bottom: 1rem !important
        }

        .ml-3 {
            margin-left: 1rem !important
        }

        .mx-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important
        }

        .my-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .m-4 {
            margin: 1.5rem !important
        }

        .mt-4 {
            margin-top: 1.5rem !important
        }

        .mr-4 {
            margin-right: 1.5rem !important
        }

        .mb-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-4 {
            margin-left: 1.5rem !important
        }

        .mx-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important
        }

        .my-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important
        }

        .m-5 {
            margin: 3rem !important
        }

        .mt-5 {
            margin-top: 3rem !important
        }

        .mr-5 {
            margin-right: 3rem !important
        }

        .mb-5 {
            margin-bottom: 3rem !important
        }

        .ml-5 {
            margin-left: 3rem !important
        }

        .mx-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important
        }

        .my-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .p-0 {
            padding: 0 !important
        }

        .pt-0 {
            padding-top: 0 !important
        }

        .pr-0 {
            padding-right: 0 !important
        }

        .pb-0 {
            padding-bottom: 0 !important
        }

        .pl-0 {
            padding-left: 0 !important
        }

        .px-0 {
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        .py-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .p-1 {
            padding: .25rem !important
        }

        .pt-1 {
            padding-top: .25rem !important
        }

        .pr-1 {
            padding-right: .25rem !important
        }

        .pb-1 {
            padding-bottom: .25rem !important
        }

        .pl-1 {
            padding-left: .25rem !important
        }

        .px-1 {
            padding-right: .25rem !important;
            padding-left: .25rem !important
        }

        .py-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important
        }

        .p-2 {
            padding: .5rem !important
        }

        .pt-2 {
            padding-top: .5rem !important
        }

        .pr-2 {
            padding-right: .5rem !important
        }

        .pb-2 {
            padding-bottom: .5rem !important
        }

        .pl-2 {
            padding-left: .5rem !important
        }

        .px-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important
        }

        .py-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .p-3 {
            padding: 1rem !important
        }

        .pt-3 {
            padding-top: 1rem !important
        }

        .pr-3 {
            padding-right: 1rem !important
        }

        .pb-3 {
            padding-bottom: 1rem !important
        }

        .pl-3 {
            padding-left: 1rem !important
        }

        .px-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .p-4 {
            padding: 1.5rem !important
        }

        .pt-4 {
            padding-top: 1.5rem !important
        }

        .pr-4 {
            padding-right: 1.5rem !important
        }

        .pb-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-4 {
            padding-left: 1.5rem !important
        }

        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important
        }

        .py-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important
        }

        .p-5 {
            padding: 3rem !important
        }

        .pt-5 {
            padding-top: 3rem !important
        }

        .pr-5 {
            padding-right: 3rem !important
        }

        .pb-5 {
            padding-bottom: 3rem !important
        }

        .pl-5 {
            padding-left: 3rem !important
        }

        .px-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important
        }

        .m-auto {
            margin: auto !important
        }

        .mt-auto {
            margin-top: auto !important
        }

        .mr-auto {
            margin-right: auto !important
        }

        .mb-auto {
            margin-bottom: auto !important
        }

        .ml-auto {
            margin-left: auto !important
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important
        }

        .my-auto {
            margin-top: auto !important;
            margin-bottom: auto !important
        }

        @media (min-width:576px) {
            .m-sm-0 {
                margin: 0 !important
            }
            .mt-sm-0 {
                margin-top: 0 !important
            }
            .mr-sm-0 {
                margin-right: 0 !important
            }
            .mb-sm-0 {
                margin-bottom: 0 !important
            }
            .ml-sm-0 {
                margin-left: 0 !important
            }
            .mx-sm-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }
            .my-sm-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }
            .m-sm-1 {
                margin: .25rem !important
            }
            .mt-sm-1 {
                margin-top: .25rem !important
            }
            .mr-sm-1 {
                margin-right: .25rem !important
            }
            .mb-sm-1 {
                margin-bottom: .25rem !important
            }
            .ml-sm-1 {
                margin-left: .25rem !important
            }
            .mx-sm-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }
            .my-sm-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }
            .m-sm-2 {
                margin: .5rem !important
            }
            .mt-sm-2 {
                margin-top: .5rem !important
            }
            .mr-sm-2 {
                margin-right: .5rem !important
            }
            .mb-sm-2 {
                margin-bottom: .5rem !important
            }
            .ml-sm-2 {
                margin-left: .5rem !important
            }
            .mx-sm-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }
            .my-sm-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }
            .m-sm-3 {
                margin: 1rem !important
            }
            .mt-sm-3 {
                margin-top: 1rem !important
            }
            .mr-sm-3 {
                margin-right: 1rem !important
            }
            .mb-sm-3 {
                margin-bottom: 1rem !important
            }
            .ml-sm-3 {
                margin-left: 1rem !important
            }
            .mx-sm-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }
            .my-sm-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }
            .m-sm-4 {
                margin: 1.5rem !important
            }
            .mt-sm-4 {
                margin-top: 1.5rem !important
            }
            .mr-sm-4 {
                margin-right: 1.5rem !important
            }
            .mb-sm-4 {
                margin-bottom: 1.5rem !important
            }
            .ml-sm-4 {
                margin-left: 1.5rem !important
            }
            .mx-sm-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }
            .my-sm-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }
            .m-sm-5 {
                margin: 3rem !important
            }
            .mt-sm-5 {
                margin-top: 3rem !important
            }
            .mr-sm-5 {
                margin-right: 3rem !important
            }
            .mb-sm-5 {
                margin-bottom: 3rem !important
            }
            .ml-sm-5 {
                margin-left: 3rem !important
            }
            .mx-sm-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }
            .my-sm-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }
            .p-sm-0 {
                padding: 0 !important
            }
            .pt-sm-0 {
                padding-top: 0 !important
            }
            .pr-sm-0 {
                padding-right: 0 !important
            }
            .pb-sm-0 {
                padding-bottom: 0 !important
            }
            .pl-sm-0 {
                padding-left: 0 !important
            }
            .px-sm-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }
            .py-sm-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }
            .p-sm-1 {
                padding: .25rem !important
            }
            .pt-sm-1 {
                padding-top: .25rem !important
            }
            .pr-sm-1 {
                padding-right: .25rem !important
            }
            .pb-sm-1 {
                padding-bottom: .25rem !important
            }
            .pl-sm-1 {
                padding-left: .25rem !important
            }
            .px-sm-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }
            .py-sm-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }
            .p-sm-2 {
                padding: .5rem !important
            }
            .pt-sm-2 {
                padding-top: .5rem !important
            }
            .pr-sm-2 {
                padding-right: .5rem !important
            }
            .pb-sm-2 {
                padding-bottom: .5rem !important
            }
            .pl-sm-2 {
                padding-left: .5rem !important
            }
            .px-sm-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }
            .py-sm-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }
            .p-sm-3 {
                padding: 1rem !important
            }
            .pt-sm-3 {
                padding-top: 1rem !important
            }
            .pr-sm-3 {
                padding-right: 1rem !important
            }
            .pb-sm-3 {
                padding-bottom: 1rem !important
            }
            .pl-sm-3 {
                padding-left: 1rem !important
            }
            .px-sm-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }
            .py-sm-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }
            .p-sm-4 {
                padding: 1.5rem !important
            }
            .pt-sm-4 {
                padding-top: 1.5rem !important
            }
            .pr-sm-4 {
                padding-right: 1.5rem !important
            }
            .pb-sm-4 {
                padding-bottom: 1.5rem !important
            }
            .pl-sm-4 {
                padding-left: 1.5rem !important
            }
            .px-sm-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }
            .py-sm-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }
            .p-sm-5 {
                padding: 3rem !important
            }
            .pt-sm-5 {
                padding-top: 3rem !important
            }
            .pr-sm-5 {
                padding-right: 3rem !important
            }
            .pb-sm-5 {
                padding-bottom: 3rem !important
            }
            .pl-sm-5 {
                padding-left: 3rem !important
            }
            .px-sm-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }
            .py-sm-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }
            .m-sm-auto {
                margin: auto !important
            }
            .mt-sm-auto {
                margin-top: auto !important
            }
            .mr-sm-auto {
                margin-right: auto !important
            }
            .mb-sm-auto {
                margin-bottom: auto !important
            }
            .ml-sm-auto {
                margin-left: auto !important
            }
            .mx-sm-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }
            .my-sm-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }
        }

        @media (min-width:768px) {
            .m-md-0 {
                margin: 0 !important
            }
            .mt-md-0 {
                margin-top: 0 !important
            }
            .mr-md-0 {
                margin-right: 0 !important
            }
            .mb-md-0 {
                margin-bottom: 0 !important
            }
            .ml-md-0 {
                margin-left: 0 !important
            }
            .mx-md-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }
            .my-md-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }
            .m-md-1 {
                margin: .25rem !important
            }
            .mt-md-1 {
                margin-top: .25rem !important
            }
            .mr-md-1 {
                margin-right: .25rem !important
            }
            .mb-md-1 {
                margin-bottom: .25rem !important
            }
            .ml-md-1 {
                margin-left: .25rem !important
            }
            .mx-md-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }
            .my-md-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }
            .m-md-2 {
                margin: .5rem !important
            }
            .mt-md-2 {
                margin-top: .5rem !important
            }
            .mr-md-2 {
                margin-right: .5rem !important
            }
            .mb-md-2 {
                margin-bottom: .5rem !important
            }
            .ml-md-2 {
                margin-left: .5rem !important
            }
            .mx-md-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }
            .my-md-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }
            .m-md-3 {
                margin: 1rem !important
            }
            .mt-md-3 {
                margin-top: 1rem !important
            }
            .mr-md-3 {
                margin-right: 1rem !important
            }
            .mb-md-3 {
                margin-bottom: 1rem !important
            }
            .ml-md-3 {
                margin-left: 1rem !important
            }
            .mx-md-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }
            .my-md-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }
            .m-md-4 {
                margin: 1.5rem !important
            }
            .mt-md-4 {
                margin-top: 1.5rem !important
            }
            .mr-md-4 {
                margin-right: 1.5rem !important
            }
            .mb-md-4 {
                margin-bottom: 1.5rem !important
            }
            .ml-md-4 {
                margin-left: 1.5rem !important
            }
            .mx-md-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }
            .my-md-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }
            .m-md-5 {
                margin: 3rem !important
            }
            .mt-md-5 {
                margin-top: 3rem !important
            }
            .mr-md-5 {
                margin-right: 3rem !important
            }
            .mb-md-5 {
                margin-bottom: 3rem !important
            }
            .ml-md-5 {
                margin-left: 3rem !important
            }
            .mx-md-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }
            .my-md-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }
            .p-md-0 {
                padding: 0 !important
            }
            .pt-md-0 {
                padding-top: 0 !important
            }
            .pr-md-0 {
                padding-right: 0 !important
            }
            .pb-md-0 {
                padding-bottom: 0 !important
            }
            .pl-md-0 {
                padding-left: 0 !important
            }
            .px-md-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }
            .py-md-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }
            .p-md-1 {
                padding: .25rem !important
            }
            .pt-md-1 {
                padding-top: .25rem !important
            }
            .pr-md-1 {
                padding-right: .25rem !important
            }
            .pb-md-1 {
                padding-bottom: .25rem !important
            }
            .pl-md-1 {
                padding-left: .25rem !important
            }
            .px-md-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }
            .py-md-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }
            .p-md-2 {
                padding: .5rem !important
            }
            .pt-md-2 {
                padding-top: .5rem !important
            }
            .pr-md-2 {
                padding-right: .5rem !important
            }
            .pb-md-2 {
                padding-bottom: .5rem !important
            }
            .pl-md-2 {
                padding-left: .5rem !important
            }
            .px-md-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }
            .py-md-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }
            .p-md-3 {
                padding: 1rem !important
            }
            .pt-md-3 {
                padding-top: 1rem !important
            }
            .pr-md-3 {
                padding-right: 1rem !important
            }
            .pb-md-3 {
                padding-bottom: 1rem !important
            }
            .pl-md-3 {
                padding-left: 1rem !important
            }
            .px-md-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }
            .py-md-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }
            .p-md-4 {
                padding: 1.5rem !important
            }
            .pt-md-4 {
                padding-top: 1.5rem !important
            }
            .pr-md-4 {
                padding-right: 1.5rem !important
            }
            .pb-md-4 {
                padding-bottom: 1.5rem !important
            }
            .pl-md-4 {
                padding-left: 1.5rem !important
            }
            .px-md-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }
            .py-md-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }
            .p-md-5 {
                padding: 3rem !important
            }
            .pt-md-5 {
                padding-top: 3rem !important
            }
            .pr-md-5 {
                padding-right: 3rem !important
            }
            .pb-md-5 {
                padding-bottom: 3rem !important
            }
            .pl-md-5 {
                padding-left: 3rem !important
            }
            .px-md-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }
            .py-md-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }
            .m-md-auto {
                margin: auto !important
            }
            .mt-md-auto {
                margin-top: auto !important
            }
            .mr-md-auto {
                margin-right: auto !important
            }
            .mb-md-auto {
                margin-bottom: auto !important
            }
            .ml-md-auto {
                margin-left: auto !important
            }
            .mx-md-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }
            .my-md-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }
        }

        @media (min-width:992px) {
            .m-lg-0 {
                margin: 0 !important
            }
            .mt-lg-0 {
                margin-top: 0 !important
            }
            .mr-lg-0 {
                margin-right: 0 !important
            }
            .mb-lg-0 {
                margin-bottom: 0 !important
            }
            .ml-lg-0 {
                margin-left: 0 !important
            }
            .mx-lg-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }
            .my-lg-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }
            .m-lg-1 {
                margin: .25rem !important
            }
            .mt-lg-1 {
                margin-top: .25rem !important
            }
            .mr-lg-1 {
                margin-right: .25rem !important
            }
            .mb-lg-1 {
                margin-bottom: .25rem !important
            }
            .ml-lg-1 {
                margin-left: .25rem !important
            }
            .mx-lg-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }
            .my-lg-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }
            .m-lg-2 {
                margin: .5rem !important
            }
            .mt-lg-2 {
                margin-top: .5rem !important
            }
            .mr-lg-2 {
                margin-right: .5rem !important
            }
            .mb-lg-2 {
                margin-bottom: .5rem !important
            }
            .ml-lg-2 {
                margin-left: .5rem !important
            }
            .mx-lg-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }
            .my-lg-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }
            .m-lg-3 {
                margin: 1rem !important
            }
            .mt-lg-3 {
                margin-top: 1rem !important
            }
            .mr-lg-3 {
                margin-right: 1rem !important
            }
            .mb-lg-3 {
                margin-bottom: 1rem !important
            }
            .ml-lg-3 {
                margin-left: 1rem !important
            }
            .mx-lg-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }
            .my-lg-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }
            .m-lg-4 {
                margin: 1.5rem !important
            }
            .mt-lg-4 {
                margin-top: 1.5rem !important
            }
            .mr-lg-4 {
                margin-right: 1.5rem !important
            }
            .mb-lg-4 {
                margin-bottom: 1.5rem !important
            }
            .ml-lg-4 {
                margin-left: 1.5rem !important
            }
            .mx-lg-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }
            .my-lg-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }
            .m-lg-5 {
                margin: 3rem !important
            }
            .mt-lg-5 {
                margin-top: 3rem !important
            }
            .mr-lg-5 {
                margin-right: 3rem !important
            }
            .mb-lg-5 {
                margin-bottom: 3rem !important
            }
            .ml-lg-5 {
                margin-left: 3rem !important
            }
            .mx-lg-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }
            .my-lg-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }
            .p-lg-0 {
                padding: 0 !important
            }
            .pt-lg-0 {
                padding-top: 0 !important
            }
            .pr-lg-0 {
                padding-right: 0 !important
            }
            .pb-lg-0 {
                padding-bottom: 0 !important
            }
            .pl-lg-0 {
                padding-left: 0 !important
            }
            .px-lg-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }
            .py-lg-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }
            .p-lg-1 {
                padding: .25rem !important
            }
            .pt-lg-1 {
                padding-top: .25rem !important
            }
            .pr-lg-1 {
                padding-right: .25rem !important
            }
            .pb-lg-1 {
                padding-bottom: .25rem !important
            }
            .pl-lg-1 {
                padding-left: .25rem !important
            }
            .px-lg-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }
            .py-lg-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }
            .p-lg-2 {
                padding: .5rem !important
            }
            .pt-lg-2 {
                padding-top: .5rem !important
            }
            .pr-lg-2 {
                padding-right: .5rem !important
            }
            .pb-lg-2 {
                padding-bottom: .5rem !important
            }
            .pl-lg-2 {
                padding-left: .5rem !important
            }
            .px-lg-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }
            .py-lg-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }
            .p-lg-3 {
                padding: 1rem !important
            }
            .pt-lg-3 {
                padding-top: 1rem !important
            }
            .pr-lg-3 {
                padding-right: 1rem !important
            }
            .pb-lg-3 {
                padding-bottom: 1rem !important
            }
            .pl-lg-3 {
                padding-left: 1rem !important
            }
            .px-lg-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }
            .py-lg-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }
            .p-lg-4 {
                padding: 1.5rem !important
            }
            .pt-lg-4 {
                padding-top: 1.5rem !important
            }
            .pr-lg-4 {
                padding-right: 1.5rem !important
            }
            .pb-lg-4 {
                padding-bottom: 1.5rem !important
            }
            .pl-lg-4 {
                padding-left: 1.5rem !important
            }
            .px-lg-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }
            .py-lg-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }
            .p-lg-5 {
                padding: 3rem !important
            }
            .pt-lg-5 {
                padding-top: 3rem !important
            }
            .pr-lg-5 {
                padding-right: 3rem !important
            }
            .pb-lg-5 {
                padding-bottom: 3rem !important
            }
            .pl-lg-5 {
                padding-left: 3rem !important
            }
            .px-lg-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }
            .py-lg-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }
            .m-lg-auto {
                margin: auto !important
            }
            .mt-lg-auto {
                margin-top: auto !important
            }
            .mr-lg-auto {
                margin-right: auto !important
            }
            .mb-lg-auto {
                margin-bottom: auto !important
            }
            .ml-lg-auto {
                margin-left: auto !important
            }
            .mx-lg-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }
            .my-lg-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }
        }

        @media (min-width:1200px) {
            .m-xl-0 {
                margin: 0 !important
            }
            .mt-xl-0 {
                margin-top: 0 !important
            }
            .mr-xl-0 {
                margin-right: 0 !important
            }
            .mb-xl-0 {
                margin-bottom: 0 !important
            }
            .ml-xl-0 {
                margin-left: 0 !important
            }
            .mx-xl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }
            .my-xl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }
            .m-xl-1 {
                margin: .25rem !important
            }
            .mt-xl-1 {
                margin-top: .25rem !important
            }
            .mr-xl-1 {
                margin-right: .25rem !important
            }
            .mb-xl-1 {
                margin-bottom: .25rem !important
            }
            .ml-xl-1 {
                margin-left: .25rem !important
            }
            .mx-xl-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }
            .my-xl-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }
            .m-xl-2 {
                margin: .5rem !important
            }
            .mt-xl-2 {
                margin-top: .5rem !important
            }
            .mr-xl-2 {
                margin-right: .5rem !important
            }
            .mb-xl-2 {
                margin-bottom: .5rem !important
            }
            .ml-xl-2 {
                margin-left: .5rem !important
            }
            .mx-xl-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }
            .my-xl-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }
            .m-xl-3 {
                margin: 1rem !important
            }
            .mt-xl-3 {
                margin-top: 1rem !important
            }
            .mr-xl-3 {
                margin-right: 1rem !important
            }
            .mb-xl-3 {
                margin-bottom: 1rem !important
            }
            .ml-xl-3 {
                margin-left: 1rem !important
            }
            .mx-xl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }
            .my-xl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }
            .m-xl-4 {
                margin: 1.5rem !important
            }
            .mt-xl-4 {
                margin-top: 1.5rem !important
            }
            .mr-xl-4 {
                margin-right: 1.5rem !important
            }
            .mb-xl-4 {
                margin-bottom: 1.5rem !important
            }
            .ml-xl-4 {
                margin-left: 1.5rem !important
            }
            .mx-xl-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }
            .my-xl-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }
            .m-xl-5 {
                margin: 3rem !important
            }
            .mt-xl-5 {
                margin-top: 3rem !important
            }
            .mr-xl-5 {
                margin-right: 3rem !important
            }
            .mb-xl-5 {
                margin-bottom: 3rem !important
            }
            .ml-xl-5 {
                margin-left: 3rem !important
            }
            .mx-xl-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }
            .my-xl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }
            .p-xl-0 {
                padding: 0 !important
            }
            .pt-xl-0 {
                padding-top: 0 !important
            }
            .pr-xl-0 {
                padding-right: 0 !important
            }
            .pb-xl-0 {
                padding-bottom: 0 !important
            }
            .pl-xl-0 {
                padding-left: 0 !important
            }
            .px-xl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }
            .py-xl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }
            .p-xl-1 {
                padding: .25rem !important
            }
            .pt-xl-1 {
                padding-top: .25rem !important
            }
            .pr-xl-1 {
                padding-right: .25rem !important
            }
            .pb-xl-1 {
                padding-bottom: .25rem !important
            }
            .pl-xl-1 {
                padding-left: .25rem !important
            }
            .px-xl-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }
            .py-xl-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }
            .p-xl-2 {
                padding: .5rem !important
            }
            .pt-xl-2 {
                padding-top: .5rem !important
            }
            .pr-xl-2 {
                padding-right: .5rem !important
            }
            .pb-xl-2 {
                padding-bottom: .5rem !important
            }
            .pl-xl-2 {
                padding-left: .5rem !important
            }
            .px-xl-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }
            .py-xl-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }
            .p-xl-3 {
                padding: 1rem !important
            }
            .pt-xl-3 {
                padding-top: 1rem !important
            }
            .pr-xl-3 {
                padding-right: 1rem !important
            }
            .pb-xl-3 {
                padding-bottom: 1rem !important
            }
            .pl-xl-3 {
                padding-left: 1rem !important
            }
            .px-xl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }
            .py-xl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }
            .p-xl-4 {
                padding: 1.5rem !important
            }
            .pt-xl-4 {
                padding-top: 1.5rem !important
            }
            .pr-xl-4 {
                padding-right: 1.5rem !important
            }
            .pb-xl-4 {
                padding-bottom: 1.5rem !important
            }
            .pl-xl-4 {
                padding-left: 1.5rem !important
            }
            .px-xl-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }
            .py-xl-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }
            .p-xl-5 {
                padding: 3rem !important
            }
            .pt-xl-5 {
                padding-top: 3rem !important
            }
            .pr-xl-5 {
                padding-right: 3rem !important
            }
            .pb-xl-5 {
                padding-bottom: 3rem !important
            }
            .pl-xl-5 {
                padding-left: 3rem !important
            }
            .px-xl-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }
            .py-xl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }
            .m-xl-auto {
                margin: auto !important
            }
            .mt-xl-auto {
                margin-top: auto !important
            }
            .mr-xl-auto {
                margin-right: auto !important
            }
            .mb-xl-auto {
                margin-bottom: auto !important
            }
            .ml-xl-auto {
                margin-left: auto !important
            }
            .mx-xl-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }
            .my-xl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }
        }

        .text-justify {
            text-align: justify !important
        }

        .text-nowrap {
            white-space: nowrap !important
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .text-left {
            text-align: left !important
        }

        .text-right {
            text-align: right !important
        }

        .text-center {
            text-align: center !important
        }

        @media (min-width:576px) {
            .text-sm-left {
                text-align: left !important
            }
            .text-sm-right {
                text-align: right !important
            }
            .text-sm-center {
                text-align: center !important
            }
        }

        @media (min-width:768px) {
            .text-md-left {
                text-align: left !important
            }
            .text-md-right {
                text-align: right !important
            }
            .text-md-center {
                text-align: center !important
            }
        }

        @media (min-width:992px) {
            .text-lg-left {
                text-align: left !important
            }
            .text-lg-right {
                text-align: right !important
            }
            .text-lg-center {
                text-align: center !important
            }
        }

        @media (min-width:1200px) {
            .text-xl-left {
                text-align: left !important
            }
            .text-xl-right {
                text-align: right !important
            }
            .text-xl-center {
                text-align: center !important
            }
        }

        .text-lowercase {
            text-transform: lowercase !important
        }

        .text-uppercase {
            text-transform: uppercase !important
        }

        .text-capitalize {
            text-transform: capitalize !important
        }

        .font-weight-normal {
            font-weight: 400
        }

        .font-weight-bold {
            font-weight: 700
        }

        .font-italic {
            font-style: italic
        }

        .text-white {
            color: #fff !important
        }

        .text-primary {
            color: #007bff !important
        }

        a.text-primary:focus,
        a.text-primary:hover {
            color: #0062cc !important
        }

        .text-secondary {
            color: #868e96 !important
        }

        a.text-secondary:focus,
        a.text-secondary:hover {
            color: #6c757d !important
        }

        .text-success {
            color: #28a745 !important
        }

        a.text-success:focus,
        a.text-success:hover {
            color: #1e7e34 !important
        }

        .text-info {
            color: #17a2b8 !important
        }

        a.text-info:focus,
        a.text-info:hover {
            color: #117a8b !important
        }

        .text-warning {
            color: #ffc107 !important
        }

        a.text-warning:focus,
        a.text-warning:hover {
            color: #d39e00 !important
        }

        .text-danger {
            color: #dc3545 !important
        }

        a.text-danger:focus,
        a.text-danger:hover {
            color: #bd2130 !important
        }

        .text-light {
            color: #f8f9fa !important
        }

        a.text-light:focus,
        a.text-light:hover {
            color: #dae0e5 !important
        }

        .text-dark {
            color: #343a40 !important
        }

        a.text-dark:focus,
        a.text-dark:hover {
            color: #1d2124 !important
        }

        .text-muted {
            color: #868e96 !important
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0
        }

        .visible {
            visibility: visible !important
        }

        .invisible {
            visibility: hidden !important
        }

        /*!

 =========================================================
 * Now-ui-kit - v1.1.0
 =========================================================

 * Product Page: http://www.creative-tim.com/product/now-ui-kit
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

 * Designed by www.invisionapp.com Coded by www.creative-tim.com

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */

        /*     brand Colors              */

        /*      light colors         */

        /* ========================================================================
 * bootstrap-switch - v3.3.2
 * http://www.bootstrap-switch.org
 * ========================================================================
 * Copyright 2012-2013 Mattia Larentis
 * http://www.apache.org/licenses/LICENSE-2.0
 */

        .bootstrap-switch {
            display: inline-block;
            direction: ltr;
            cursor: pointer;
            border-radius: 30px;
            border: 0;
            position: relative;
            text-align: left;
            margin-bottom: 10px;
            line-height: 8px;
            width: 59px !important;
            height: 22px;
            outline: none;
            z-index: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            margin-right: 20px;
            background: rgba(44, 44, 44, 0.2);
        }

        .bootstrap-switch .bootstrap-switch-container {
            display: inline-flex;
            top: 0;
            height: 22px;
            border-radius: 4px;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            width: 100px !important;
        }

        .bootstrap-switch .bootstrap-switch-handle-on,
        .bootstrap-switch .bootstrap-switch-handle-off,
        .bootstrap-switch .bootstrap-switch-label {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            cursor: pointer;
            display: inline-block !important;
            height: 100%;
            color: #fff;
            padding: 6px 12px;
            font-size: 11px;
            text-indent: -5px;
            line-height: 15px;
            -webkit-transition: 0.25s ease-out;
            transition: 0.25s ease-out;
        }

        .bootstrap-switch .bootstrap-switch-handle-on,
        .bootstrap-switch .bootstrap-switch-handle-off {
            text-align: center;
            z-index: 1;
            float: left;
            line-height: 11px;
            width: 50% !important;
        }

        .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-brown,
        .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-brown {
            color: #fff;
            background: #f96332;
        }

        .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-blue,
        .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-blue {
            color: #fff;
            background: #2CA8FF;
        }

        .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-green,
        .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-green {
            color: #fff;
            background: #18ce0f;
        }

        .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-orange,
        .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-orange {
            background: #FFB236;
            color: #fff;
        }

        .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-red,
        .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-red {
            color: #fff;
            background: #FF3636;
        }

        .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-default,
        .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default {
            color: #fff;
        }

        .bootstrap-switch .bootstrap-switch-label {
            text-align: center;
            z-index: 100;
            color: #333333;
            background: #ffffff;
            width: 22px !important;
            height: 22px !important;
            margin: 0px -11px;
            border-radius: 20px;
            position: absolute;
            float: left;
            top: 0;
            left: 50%;
            padding: 0;
            box-shadow: 0 1px 11px rgba(0, 0, 0, 0.25);
        }

        .bootstrap-switch.bootstrap-switch-off .bootstrap-switch-label {
            background-color: rgba(23, 23, 23, 0.4);
        }

        .bootstrap-switch.bootstrap-switch-on:hover .bootstrap-switch-label {
            width: 27px !important;
            margin-left: -16px;
        }

        .bootstrap-switch.bootstrap-switch-off:hover .bootstrap-switch-label {
            width: 27px !important;
            margin-left: -11px;
        }

        .bootstrap-switch .bootstrap-switch-handle-on {
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px;
        }

        .bootstrap-switch .bootstrap-switch-handle-off {
            text-indent: 6px;
        }

        .bootstrap-switch input[type='radio'],
        .bootstrap-switch input[type='checkbox'] {
            position: absolute !important;
            top: 0;
            left: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            z-index: -1;
        }

        .bootstrap-switch input[type='radio'].form-control,
        .bootstrap-switch input[type='checkbox'].form-control {
            height: auto;
        }

        .bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-on,
        .bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-off,
        .bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-label {
            padding: 1px 5px;
            font-size: 12px;
            line-height: 1.5;
        }

        .bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-on,
        .bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-off,
        .bootstrap-switch.bootstrap-switch-small .bootstrap-switch-label {
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
        }

        .bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-on,
        .bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-off,
        .bootstrap-switch.bootstrap-switch-large .bootstrap-switch-label {
            padding: 6px 16px;
            font-size: 18px;
            line-height: 1.33;
        }

        .bootstrap-switch.bootstrap-switch-disabled,
        .bootstrap-switch.bootstrap-switch-readonly,
        .bootstrap-switch.bootstrap-switch-indeterminate {
            cursor: default !important;
        }

        .bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-on,
        .bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-on,
        .bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-on,
        .bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-off,
        .bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-off,
        .bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-off,
        .bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-label,
        .bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-label,
        .bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-label {
            opacity: 0.5;
            filter: alpha(opacity=50);
            cursor: default !important;
        }

        .bootstrap-switch.bootstrap-switch-animate .bootstrap-switch-container {
            -webkit-transition: margin-left 0.5s;
            transition: margin-left 0.5s;
        }

        .bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-on {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px;
        }

        .bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-off {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px;
        }

        .bootstrap-switch.bootstrap-switch-on .bootstrap-switch-container {
            margin-left: -2px !important;
        }

        .bootstrap-switch.bootstrap-switch-off .bootstrap-switch-container {
            margin-left: -39px !important;
        }

        .bootstrap-switch.bootstrap-switch-on .bootstrap-switch-label:before {
            background-color: #FFFFFF;
        }

        .bootstrap-switch.bootstrap-switch-on .bootstrap-switch-red~.bootstrap-switch-default {
            background-color: #FF3636;
        }

        .bootstrap-switch.bootstrap-switch-on .bootstrap-switch-orange~.bootstrap-switch-default {
            background-color: #FFB236;
        }

        .bootstrap-switch.bootstrap-switch-on .bootstrap-switch-green~.bootstrap-switch-default {
            background-color: #18ce0f;
        }

        .bootstrap-switch.bootstrap-switch-on .bootstrap-switch-brown~.bootstrap-switch-default {
            background-color: #f96332;
        }

        .bootstrap-switch.bootstrap-switch-on .bootstrap-switch-blue~.bootstrap-switch-default {
            background-color: #2CA8FF;
        }

        .bootstrap-switch.bootstrap-switch-off .bootstrap-switch-red,
        .bootstrap-switch.bootstrap-switch-off .bootstrap-switch-brown,
        .bootstrap-switch.bootstrap-switch-off .bootstrap-switch-blue,
        .bootstrap-switch.bootstrap-switch-off .bootstrap-switch-orange,
        .bootstrap-switch.bootstrap-switch-off .bootstrap-switch-green {
            background-color: #E3E3E3;
        }

        .bootstrap-switch-off .bootstrap-switch-handle-on {
            opacity: 0;
        }

        .bootstrap-switch-on .bootstrap-switch-handle-off {
            opacity: 0;
        }

        /*! nouislider - 9.1.0 - 2016-12-10 16:00:32 */

        /* Functional styling;
 * These styles are required for noUiSlider to function.
 * You don't need to change these rules to apply your design.
 */

        .noUi-target,
        .noUi-target * {
            -webkit-touch-callout: none;
            -webkit-tap-highlight-color: transparent;
            -webkit-user-select: none;
            -ms-touch-action: none;
            touch-action: none;
            -ms-user-select: none;
            -moz-user-select: none;
            user-select: none;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .noUi-target {
            position: relative;
            direction: ltr;
        }

        .noUi-base {
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 1;
            /* Fix 401 */
        }

        .noUi-connect {
            position: absolute;
            right: 0;
            top: 0;
            left: 0;
            bottom: 0;
        }

        .noUi-origin {
            position: absolute;
            height: 0;
            width: 0;
        }

        .noUi-handle {
            position: relative;
            z-index: 1;
        }

        .noUi-state-tap .noUi-connect,
        .noUi-state-tap .noUi-origin {
            -webkit-transition: top 0.3s, right 0.3s, bottom 0.3s, left 0.3s;
            transition: top 0.3s, right 0.3s, bottom 0.3s, left 0.3s;
        }

        .noUi-state-drag * {
            cursor: inherit !important;
        }

        /* Painting and performance;
 * Browsers can paint handles in their own layer.
 */

        .noUi-base,
        .noUi-handle {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        /* Slider size and handle placement;
 */

        .noUi-horizontal {
            height: 1px;
        }

        .noUi-horizontal .noUi-handle {
            border-radius: 50%;
            background-color: #FFFFFF;
            box-shadow: 0 1px 13px 0 rgba(0, 0, 0, 0.2);
            height: 15px;
            width: 15px;
            cursor: pointer;
            margin-left: -10px;
            margin-top: -7px;
        }

        .noUi-vertical {
            width: 18px;
        }

        .noUi-vertical .noUi-handle {
            width: 28px;
            height: 34px;
            left: -6px;
            top: -17px;
        }

        /* Styling;
 */

        .noUi-target {
            background-color: rgba(182, 182, 182, 0.3);
            border-radius: 3px;
        }

        .noUi-connect {
            background: #888;
            border-radius: 3px;
            -webkit-transition: background 450ms;
            transition: background 450ms;
        }

        /* Handles and cursors;
 */

        .noUi-draggable {
            cursor: ew-resize;
        }

        .noUi-vertical .noUi-draggable {
            cursor: ns-resize;
        }

        .noUi-handle {
            border-radius: 3px;
            background: #FFF;
            cursor: default;
            box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #EBEBEB, 0 3px 6px -3px #BBB;
            -webkit-transition: 300ms ease 0s;
            -moz-transition: 300ms ease 0s;
            -ms-transition: 300ms ease 0s;
            -o-transform: 300ms ease 0s;
            transition: 300ms ease 0s;
        }

        .noUi-active {
            -webkit-transform: scale3d(1.5, 1.5, 1);
            -moz-transform: scale3d(1.5, 1.5, 1);
            -ms-transform: scale3d(1.5, 1.5, 1);
            -o-transform: scale3d(1.5, 1.5, 1);
            transform: scale3d(1.5, 1.5, 1);
        }

        /* Disabled state;
 */

        [disabled] .noUi-connect {
            background: #B8B8B8;
        }

        [disabled].noUi-target,
        [disabled].noUi-handle,
        [disabled] .noUi-handle {
            cursor: not-allowed;
        }

        /* Base;
 *
 */

        .noUi-pips,
        .noUi-pips * {
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .noUi-pips {
            position: absolute;
            color: #999;
        }

        /* Values;
 *
 */

        .noUi-value {
            position: absolute;
            text-align: center;
        }

        .noUi-value-sub {
            color: #ccc;
            font-size: 10px;
        }

        /* Markings;
 *
 */

        .noUi-marker {
            position: absolute;
            background: #CCC;
        }

        .noUi-marker-sub {
            background: #AAA;
        }

        .noUi-marker-large {
            background: #AAA;
        }

        /* Horizontal layout;
 *
 */

        .noUi-pips-horizontal {
            padding: 10px 0;
            height: 80px;
            top: 100%;
            left: 0;
            width: 100%;
        }

        .noUi-value-horizontal {
            -webkit-transform: translate3d(-50%, 50%, 0);
            transform: translate3d(-50%, 50%, 0);
        }

        .noUi-marker-horizontal.noUi-marker {
            margin-left: -1px;
            width: 2px;
            height: 5px;
        }

        .noUi-marker-horizontal.noUi-marker-sub {
            height: 10px;
        }

        .noUi-marker-horizontal.noUi-marker-large {
            height: 15px;
        }

        /* Vertical layout;
 *
 */

        .noUi-pips-vertical {
            padding: 0 10px;
            height: 100%;
            top: 0;
            left: 100%;
        }

        .noUi-value-vertical {
            -webkit-transform: translate3d(0, 50%, 0);
            transform: translate3d(0, 50%, 0);
            padding-left: 25px;
        }

        .noUi-marker-vertical.noUi-marker {
            width: 5px;
            height: 2px;
            margin-top: -1px;
        }

        .noUi-marker-vertical.noUi-marker-sub {
            width: 10px;
        }

        .noUi-marker-vertical.noUi-marker-large {
            width: 15px;
        }

        .noUi-tooltip {
            display: block;
            position: absolute;
            border: 1px solid #D9D9D9;
            border-radius: 3px;
            background: #fff;
            color: #000;
            padding: 5px;
            text-align: center;
        }

        .noUi-horizontal .noUi-tooltip {
            -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
            left: 50%;
            bottom: 120%;
        }

        .noUi-vertical .noUi-tooltip {
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%);
            top: 50%;
            right: 120%;
        }

        .slider.slider-neutral .noUi-connect,
        .slider.slider-neutral.noUi-connect {
            background-color: #FFFFFF;
        }

        .slider.slider-neutral.noUi-target {
            background-color: rgba(255, 255, 255, 0.3);
        }

        .slider.slider-neutral .noUi-handle {
            background-color: #FFFFFF;
        }

        .slider.slider-primary .noUi-connect,
        .slider.slider-primary.noUi-connect {
            background-color: #f96332;
        }

        .slider.slider-primary.noUi-target {
            background-color: rgba(249, 99, 50, 0.3);
        }

        .slider.slider-primary .noUi-handle {
            background-color: #f96332;
        }

        .slider.slider-info .noUi-connect,
        .slider.slider-info.noUi-connect {
            background-color: #2CA8FF;
        }

        .slider.slider-info.noUi-target {
            background-color: rgba(44, 168, 255, 0.3);
        }

        .slider.slider-info .noUi-handle {
            background-color: #2CA8FF;
        }

        .slider.slider-success .noUi-connect,
        .slider.slider-success.noUi-connect {
            background-color: #18ce0f;
        }

        .slider.slider-success.noUi-target {
            background-color: rgba(24, 206, 15, 0.3);
        }

        .slider.slider-success .noUi-handle {
            background-color: #18ce0f;
        }

        .slider.slider-warning .noUi-connect,
        .slider.slider-warning.noUi-connect {
            background-color: #FFB236;
        }

        .slider.slider-warning.noUi-target {
            background-color: rgba(255, 178, 54, 0.3);
        }

        .slider.slider-warning .noUi-handle {
            background-color: #FFB236;
        }

        .slider.slider-danger .noUi-connect,
        .slider.slider-danger.noUi-connect {
            background-color: #FF3636;
        }

        .slider.slider-danger.noUi-target {
            background-color: rgba(255, 54, 54, 0.3);
        }

        .slider.slider-danger .noUi-handle {
            background-color: #FF3636;
        }

        /*!
 * Datepicker for Bootstrap v1.7.0-dev (https://github.com/uxsolutions/bootstrap-datepicker)
 *
 * Licensed under the Apache License v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 */

        .datepicker {
            padding: 8px 6px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            direction: ltr;
            -webkit-transform: translate3d(0, -40px, 0);
            -moz-transform: translate3d(0, -40px, 0);
            -o-transform: translate3d(0, -40px, 0);
            -ms-transform: translate3d(0, -40px, 0);
            transform: translate3d(0, -40px, 0);
            transition: all 0.3s cubic-bezier(0.215, 0.61, 0.355, 1) 0s, opacity 0.3s ease 0s, height 0s linear 0.35s;
            opacity: 0;
            filter: alpha(opacity=0);
            visibility: hidden;
            display: block;
            width: 254px;
            max-width: 254px;
        }

        .datepicker.dropdown-menu:before {
            display: none;
        }

        .datepicker.datepicker-primary {
            background-color: #f96332;
        }

        .datepicker.datepicker-primary th,
        .datepicker.datepicker-primary .day div,
        .datepicker.datepicker-primary table tr td span {
            color: #FFFFFF;
        }

        .datepicker.datepicker-primary:after {
            border-bottom-color: #f96332;
        }

        .datepicker.datepicker-primary.datepicker-orient-top:after {
            border-top-color: #f96332;
        }

        .datepicker.datepicker-primary .dow {
            color: rgba(255, 255, 255, 0.8);
        }

        .datepicker.datepicker-primary table tr td.old div,
        .datepicker.datepicker-primary table tr td.new div,
        .datepicker.datepicker-primary table tr td span.old,
        .datepicker.datepicker-primary table tr td span.new {
            color: rgba(255, 255, 255, 0.4);
        }

        .datepicker.datepicker-primary table tr td span:hover,
        .datepicker.datepicker-primary table tr td span.focused {
            background: rgba(255, 255, 255, 0.1);
        }

        .datepicker.datepicker-primary .datepicker-switch:hover,
        .datepicker.datepicker-primary .prev:hover,
        .datepicker.datepicker-primary .next:hover,
        .datepicker.datepicker-primary tfoot tr th:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .datepicker.datepicker-primary table tr td.active div,
        .datepicker.datepicker-primary table tr td.active:hover div,
        .datepicker.datepicker-primary table tr td.active.disabled div,
        .datepicker.datepicker-primary table tr td.active.disabled:hover div {
            background-color: #FFFFFF;
            color: #f96332;
        }

        .datepicker.datepicker-primary table tr td.day:hover div,
        .datepicker.datepicker-primary table tr td.day.focused div {
            background: rgba(255, 255, 255, 0.2);
        }

        .datepicker.datepicker-primary table tr td.active:hover div,
        .datepicker.datepicker-primary table tr td.active:hover:hover div,
        .datepicker.datepicker-primary table tr td.active.disabled:hover div,
        .datepicker.datepicker-primary table tr td.active.disabled:hover:hover div,
        .datepicker.datepicker-primary table tr td.active:active div,
        .datepicker.datepicker-primary table tr td.active:hover:active div,
        .datepicker.datepicker-primary table tr td.active.disabled:active div,
        .datepicker.datepicker-primary table tr td.active.disabled:hover:active div,
        .datepicker.datepicker-primary table tr td.active.active div,
        .datepicker.datepicker-primary table tr td.active:hover.active div,
        .datepicker.datepicker-primary table tr td.active.disabled.active div,
        .datepicker.datepicker-primary table tr td.active.disabled:hover.active div,
        .datepicker.datepicker-primary table tr td.active.disabled div,
        .datepicker.datepicker-primary table tr td.active:hover.disabled div,
        .datepicker.datepicker-primary table tr td.active.disabled.disabled div,
        .datepicker.datepicker-primary table tr td.active.disabled:hover.disabled div,
        .datepicker.datepicker-primary table tr td.active[disabled] div,
        .datepicker.datepicker-primary table tr td.active:hover[disabled] div,
        .datepicker.datepicker-primary table tr td.active.disabled[disabled] div,
        .datepicker.datepicker-primary table tr td.active.disabled:hover[disabled] div,
        .datepicker.datepicker-primary table tr td span.active:hover,
        .datepicker.datepicker-primary table tr td span.active:hover:hover,
        .datepicker.datepicker-primary table tr td span.active.disabled:hover,
        .datepicker.datepicker-primary table tr td span.active.disabled:hover:hover,
        .datepicker.datepicker-primary table tr td span.active:active,
        .datepicker.datepicker-primary table tr td span.active:hover:active,
        .datepicker.datepicker-primary table tr td span.active.disabled:active,
        .datepicker.datepicker-primary table tr td span.active.disabled:hover:active,
        .datepicker.datepicker-primary table tr td span.active.active,
        .datepicker.datepicker-primary table tr td span.active:hover.active,
        .datepicker.datepicker-primary table tr td span.active.disabled.active,
        .datepicker.datepicker-primary table tr td span.active.disabled:hover.active,
        .datepicker.datepicker-primary table tr td span.active.disabled,
        .datepicker.datepicker-primary table tr td span.active:hover.disabled,
        .datepicker.datepicker-primary table tr td span.active.disabled.disabled,
        .datepicker.datepicker-primary table tr td span.active.disabled:hover.disabled,
        .datepicker.datepicker-primary table tr td span.active[disabled],
        .datepicker.datepicker-primary table tr td span.active:hover[disabled],
        .datepicker.datepicker-primary table tr td span.active.disabled[disabled],
        .datepicker.datepicker-primary table tr td span.active.disabled:hover[disabled] {
            background-color: #FFFFFF;
        }

        .datepicker.datepicker-primary table tr td span.active:hover,
        .datepicker.datepicker-primary table tr td span.active:hover:hover,
        .datepicker.datepicker-primary table tr td span.active.disabled:hover,
        .datepicker.datepicker-primary table tr td span.active.disabled:hover:hover,
        .datepicker.datepicker-primary table tr td span.active:active,
        .datepicker.datepicker-primary table tr td span.active:hover:active,
        .datepicker.datepicker-primary table tr td span.active.disabled:active,
        .datepicker.datepicker-primary table tr td span.active.disabled:hover:active,
        .datepicker.datepicker-primary table tr td span.active.active,
        .datepicker.datepicker-primary table tr td span.active:hover.active,
        .datepicker.datepicker-primary table tr td span.active.disabled.active,
        .datepicker.datepicker-primary table tr td span.active.disabled:hover.active,
        .datepicker.datepicker-primary table tr td span.active.disabled,
        .datepicker.datepicker-primary table tr td span.active:hover.disabled,
        .datepicker.datepicker-primary table tr td span.active.disabled.disabled,
        .datepicker.datepicker-primary table tr td span.active.disabled:hover.disabled,
        .datepicker.datepicker-primary table tr td span.active[disabled],
        .datepicker.datepicker-primary table tr td span.active:hover[disabled],
        .datepicker.datepicker-primary table tr td span.active.disabled[disabled],
        .datepicker.datepicker-primary table tr td span.active.disabled:hover[disabled] {
            color: #f96332;
        }

        .datepicker-inline {
            width: 220px;
        }

        .datepicker.datepicker-rtl {
            direction: rtl;
        }

        .datepicker.datepicker-rtl.dropdown-menu {
            left: auto;
        }

        .datepicker.datepicker-rtl table tr td span {
            float: right;
        }

        .datepicker-dropdown {
            top: 0;
            left: 0;
        }

        .datepicker-dropdown:before {
            content: '';
            display: inline-block;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-top: 0;
            border-bottom-color: rgba(0, 0, 0, 0.2);
            position: absolute;
        }

        .datepicker-dropdown:after {
            content: '';
            display: inline-block;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 6px solid #fff;
            border-top: 0;
            position: absolute;
        }

        .datepicker-dropdown.datepicker-orient-left:before {
            left: 6px;
        }

        .datepicker-dropdown.datepicker-orient-left:after {
            left: 7px;
        }

        .datepicker-dropdown.datepicker-orient-right:before {
            right: 6px;
        }

        .datepicker-dropdown.datepicker-orient-right:after {
            right: 7px;
        }

        .datepicker-dropdown.datepicker-orient-bottom:before {
            top: -7px;
        }

        .datepicker-dropdown.datepicker-orient-bottom:after {
            top: -6px;
        }

        .datepicker-dropdown.datepicker-orient-top:before {
            bottom: -7px;
            border-bottom: 0;
            border-top: 7px solid transparent;
        }

        .datepicker-dropdown.datepicker-orient-top:after {
            bottom: -6px;
            border-bottom: 0;
            border-top: 6px solid #fff;
        }

        .datepicker table {
            margin: 0;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 241px;
            max-width: 241px;
        }

        .datepicker .day div,
        .datepicker th {
            -webkit-transition: all 300ms ease 0s;
            -moz-transition: all 300ms ease 0s;
            -o-transition: all 300ms ease 0s;
            -ms-transition: all 300ms ease 0s;
            transition: all 300ms ease 0s;
            text-align: center;
            width: 30px;
            height: 30px;
            line-height: 2.2;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 50%;
            font-weight: 300;
            font-size: 14px;
            border: none;
            position: relative;
            cursor: pointer;
        }

        .datepicker th {
            color: #f96332;
        }

        .table-condensed>tbody>tr>td,
        .table-condensed>tbody>tr>th,
        .table-condensed>tfoot>tr>td,
        .table-condensed>tfoot>tr>th,
        .table-condensed>thead>tr>td,
        .table-condensed>thead>tr>th {
            padding: 2px;
            text-align: center;
            cursor: pointer;
        }

        .table-striped .datepicker table tr td,
        .table-striped .datepicker table tr th {
            background-color: transparent;
        }

        .datepicker table tr td.day:hover div,
        .datepicker table tr td.day.focused div {
            background: #eee;
            cursor: pointer;
        }

        .datepicker table tr td.old,
        .datepicker table tr td.new {
            color: #888;
        }

        .datepicker table tr td.disabled,
        .datepicker table tr td.disabled:hover {
            background: none;
            color: #888;
            cursor: default;
        }

        .datepicker table tr td.highlighted {
            background: #d9edf7;
            border-radius: 0;
        }

        .datepicker table tr td.today,
        .datepicker table tr td.today:hover,
        .datepicker table tr td.today.disabled,
        .datepicker table tr td.today.disabled:hover {
            background-color: #fde19a;
            background-image: -moz-linear-gradient(to bottom, #fdd49a, #fdf59a);
            background-image: -ms-linear-gradient(to bottom, #fdd49a, #fdf59a);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fdd49a), to(#fdf59a));
            background-image: -webkit-linear-gradient(to bottom, #fdd49a, #fdf59a);
            background-image: -o-linear-gradient(to bottom, #fdd49a, #fdf59a);
            background-image: linear-gradient(to bottom, #fdd49a, #fdf59a);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fdd49a', endColorstr='#fdf59a', GradientType=0);
            border-color: #fdf59a #fdf59a #fbed50;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            color: #000;
        }

        .datepicker table tr td.today:hover,
        .datepicker table tr td.today:hover:hover,
        .datepicker table tr td.today.disabled:hover,
        .datepicker table tr td.today.disabled:hover:hover,
        .datepicker table tr td.today:active,
        .datepicker table tr td.today:hover:active,
        .datepicker table tr td.today.disabled:active,
        .datepicker table tr td.today.disabled:hover:active,
        .datepicker table tr td.today.active,
        .datepicker table tr td.today:hover.active,
        .datepicker table tr td.today.disabled.active,
        .datepicker table tr td.today.disabled:hover.active,
        .datepicker table tr td.today.disabled,
        .datepicker table tr td.today:hover.disabled,
        .datepicker table tr td.today.disabled.disabled,
        .datepicker table tr td.today.disabled:hover.disabled,
        .datepicker table tr td.today[disabled],
        .datepicker table tr td.today:hover[disabled],
        .datepicker table tr td.today.disabled[disabled],
        .datepicker table tr td.today.disabled:hover[disabled] {
            background-color: #fdf59a;
        }

        .datepicker table tr td.today:active,
        .datepicker table tr td.today:hover:active,
        .datepicker table tr td.today.disabled:active,
        .datepicker table tr td.today.disabled:hover:active,
        .datepicker table tr td.today.active,
        .datepicker table tr td.today:hover.active,
        .datepicker table tr td.today.disabled.active,
        .datepicker table tr td.today.disabled:hover.active {
            background-color: #fbf069 \9;
        }

        .datepicker table tr td.today:hover:hover {
            color: #000;
        }

        .datepicker table tr td.today.active:hover {
            color: #fff;
        }

        .datepicker table tr td.range,
        .datepicker table tr td.range:hover,
        .datepicker table tr td.range.disabled,
        .datepicker table tr td.range.disabled:hover {
            background: #eee;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

        .datepicker table tr td.range.today,
        .datepicker table tr td.range.today:hover,
        .datepicker table tr td.range.today.disabled,
        .datepicker table tr td.range.today.disabled:hover {
            background-color: #f3d17a;
            background-image: -moz-linear-gradient(to bottom, #f3c17a, #f3e97a);
            background-image: -ms-linear-gradient(to bottom, #f3c17a, #f3e97a);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f3c17a), to(#f3e97a));
            background-image: -webkit-linear-gradient(to bottom, #f3c17a, #f3e97a);
            background-image: -o-linear-gradient(to bottom, #f3c17a, #f3e97a);
            background-image: linear-gradient(to bottom, #f3c17a, #f3e97a);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f3c17a', endColorstr='#f3e97a', GradientType=0);
            border-color: #f3e97a #f3e97a #edde34;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

        .datepicker table tr td.range.today:hover,
        .datepicker table tr td.range.today:hover:hover,
        .datepicker table tr td.range.today.disabled:hover,
        .datepicker table tr td.range.today.disabled:hover:hover,
        .datepicker table tr td.range.today:active,
        .datepicker table tr td.range.today:hover:active,
        .datepicker table tr td.range.today.disabled:active,
        .datepicker table tr td.range.today.disabled:hover:active,
        .datepicker table tr td.range.today.active,
        .datepicker table tr td.range.today:hover.active,
        .datepicker table tr td.range.today.disabled.active,
        .datepicker table tr td.range.today.disabled:hover.active,
        .datepicker table tr td.range.today.disabled,
        .datepicker table tr td.range.today:hover.disabled,
        .datepicker table tr td.range.today.disabled.disabled,
        .datepicker table tr td.range.today.disabled:hover.disabled,
        .datepicker table tr td.range.today[disabled],
        .datepicker table tr td.range.today:hover[disabled],
        .datepicker table tr td.range.today.disabled[disabled],
        .datepicker table tr td.range.today.disabled:hover[disabled] {
            background-color: #f3e97a;
        }

        .datepicker table tr td.range.today:active,
        .datepicker table tr td.range.today:hover:active,
        .datepicker table tr td.range.today.disabled:active,
        .datepicker table tr td.range.today.disabled:hover:active,
        .datepicker table tr td.range.today.active,
        .datepicker table tr td.range.today:hover.active,
        .datepicker table tr td.range.today.disabled.active,
        .datepicker table tr td.range.today.disabled:hover.active {
            background-color: #efe24b \9;
        }

        .datepicker table tr td.selected,
        .datepicker table tr td.selected:hover,
        .datepicker table tr td.selected.disabled,
        .datepicker table tr td.selected.disabled:hover {
            background-color: #9e9e9e;
            background-image: -moz-linear-gradient(to bottom, #b3b3b3, #808080);
            background-image: -ms-linear-gradient(to bottom, #b3b3b3, #808080);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#b3b3b3), to(#808080));
            background-image: -webkit-linear-gradient(to bottom, #b3b3b3, #808080);
            background-image: -o-linear-gradient(to bottom, #b3b3b3, #808080);
            background-image: linear-gradient(to bottom, #b3b3b3, #808080);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#b3b3b3', endColorstr='#808080', GradientType=0);
            border-color: #808080 #808080 #595959;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            color: #fff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
        }

        .datepicker table tr td.selected:hover,
        .datepicker table tr td.selected:hover:hover,
        .datepicker table tr td.selected.disabled:hover,
        .datepicker table tr td.selected.disabled:hover:hover,
        .datepicker table tr td.selected:active,
        .datepicker table tr td.selected:hover:active,
        .datepicker table tr td.selected.disabled:active,
        .datepicker table tr td.selected.disabled:hover:active,
        .datepicker table tr td.selected.active,
        .datepicker table tr td.selected:hover.active,
        .datepicker table tr td.selected.disabled.active,
        .datepicker table tr td.selected.disabled:hover.active,
        .datepicker table tr td.selected.disabled,
        .datepicker table tr td.selected:hover.disabled,
        .datepicker table tr td.selected.disabled.disabled,
        .datepicker table tr td.selected.disabled:hover.disabled,
        .datepicker table tr td.selected[disabled],
        .datepicker table tr td.selected:hover[disabled],
        .datepicker table tr td.selected.disabled[disabled],
        .datepicker table tr td.selected.disabled:hover[disabled] {
            background-color: #808080;
        }

        .datepicker table tr td.selected:active,
        .datepicker table tr td.selected:hover:active,
        .datepicker table tr td.selected.disabled:active,
        .datepicker table tr td.selected.disabled:hover:active,
        .datepicker table tr td.selected.active,
        .datepicker table tr td.selected:hover.active,
        .datepicker table tr td.selected.disabled.active,
        .datepicker table tr td.selected.disabled:hover.active {
            background-color: #666666 \9;
        }

        .datepicker table tr td.active div,
        .datepicker table tr td.active:hover div,
        .datepicker table tr td.active.disabled div,
        .datepicker table tr td.active.disabled:hover div {
            background-color: #f96332;
            color: #FFFFFF;
            box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.2);
        }

        .datepicker table tr td.active:hover div,
        .datepicker table tr td.active:hover:hover div,
        .datepicker table tr td.active.disabled:hover div,
        .datepicker table tr td.active.disabled:hover:hover div,
        .datepicker table tr td.active:active div,
        .datepicker table tr td.active:hover:active div,
        .datepicker table tr td.active.disabled:active div,
        .datepicker table tr td.active.disabled:hover:active div,
        .datepicker table tr td.active.active div,
        .datepicker table tr td.active:hover.active div,
        .datepicker table tr td.active.disabled.active div,
        .datepicker table tr td.active.disabled:hover.active div,
        .datepicker table tr td.active.disabled div,
        .datepicker table tr td.active:hover.disabled div,
        .datepicker table tr td.active.disabled.disabled div,
        .datepicker table tr td.active.disabled:hover.disabled div,
        .datepicker table tr td.active[disabled] div,
        .datepicker table tr td.active:hover[disabled] div,
        .datepicker table tr td.active.disabled[disabled] div,
        .datepicker table tr td.active.disabled:hover[disabled] div {
            background-color: #f96332;
        }

        .datepicker table tr td.active:active,
        .datepicker table tr td.active:hover:active,
        .datepicker table tr td.active.disabled:active,
        .datepicker table tr td.active.disabled:hover:active,
        .datepicker table tr td.active.active,
        .datepicker table tr td.active:hover.active,
        .datepicker table tr td.active.disabled.active,
        .datepicker table tr td.active.disabled:hover.active {
            background-color: #003399 \9;
        }

        .datepicker table tr td span {
            display: block;
            width: 41px;
            height: 41px;
            line-height: 41px;
            float: left;
            margin: 1%;
            font-size: 14px;
            cursor: pointer;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
        }

        .datepicker table tr td span:hover,
        .datepicker table tr td span.focused {
            background: #eee;
        }

        .datepicker table tr td span.disabled,
        .datepicker table tr td span.disabled:hover {
            background: none;
            color: #888;
            cursor: default;
        }

        .datepicker table tr td span.active,
        .datepicker table tr td span.active:hover,
        .datepicker table tr td span.active.disabled,
        .datepicker table tr td span.active.disabled:hover {
            color: #fff;
            background-color: #f96332;
        }

        .datepicker table tr td span.active:hover,
        .datepicker table tr td span.active:hover:hover,
        .datepicker table tr td span.active.disabled:hover,
        .datepicker table tr td span.active.disabled:hover:hover,
        .datepicker table tr td span.active:active,
        .datepicker table tr td span.active:hover:active,
        .datepicker table tr td span.active.disabled:active,
        .datepicker table tr td span.active.disabled:hover:active,
        .datepicker table tr td span.active.active,
        .datepicker table tr td span.active:hover.active,
        .datepicker table tr td span.active.disabled.active,
        .datepicker table tr td span.active.disabled:hover.active,
        .datepicker table tr td span.active.disabled,
        .datepicker table tr td span.active:hover.disabled,
        .datepicker table tr td span.active.disabled.disabled,
        .datepicker table tr td span.active.disabled:hover.disabled,
        .datepicker table tr td span.active[disabled],
        .datepicker table tr td span.active:hover[disabled],
        .datepicker table tr td span.active.disabled[disabled],
        .datepicker table tr td span.active.disabled:hover[disabled] {
            background-color: #f96332;
            box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.2);
        }

        .datepicker table tr td span.active:active,
        .datepicker table tr td span.active:hover:active,
        .datepicker table tr td span.active.disabled:active,
        .datepicker table tr td span.active.disabled:hover:active,
        .datepicker table tr td span.active.active,
        .datepicker table tr td span.active:hover.active,
        .datepicker table tr td span.active.disabled.active,
        .datepicker table tr td span.active.disabled:hover.active {
            background-color: #003399 \9;
        }

        .datepicker table tr td span.old,
        .datepicker table tr td span.new {
            color: #888;
        }

        .datepicker .datepicker-switch {
            width: auto;
            border-radius: 0.1875rem;
        }

        .datepicker .datepicker-switch,
        .datepicker .prev,
        .datepicker .next,
        .datepicker tfoot tr th {
            cursor: pointer;
        }

        .datepicker .prev,
        .datepicker .next {
            width: 35px;
            height: 35px;
        }

        .datepicker i {
            position: relative;
            top: 2px;
        }

        .datepicker .prev i {
            left: -1px;
        }

        .datepicker .next i {
            right: -1px;
        }

        .datepicker .datepicker-switch:hover,
        .datepicker .prev:hover,
        .datepicker .next:hover,
        .datepicker tfoot tr th:hover {
            background: #eee;
        }

        .datepicker .prev.disabled,
        .datepicker .next.disabled {
            visibility: hidden;
        }

        .datepicker .cw {
            font-size: 10px;
            width: 12px;
            padding: 0 2px 0 5px;
            vertical-align: middle;
        }

        .input-append.date .add-on,
        .input-prepend.date .add-on {
            cursor: pointer;
        }

        .input-append.date .add-on i,
        .input-prepend.date .add-on i {
            margin-top: 3px;
        }

        .input-daterange input {
            text-align: center;
        }

        .input-daterange input:first-child {
            -webkit-border-radius: 3px 0 0 3px;
            -moz-border-radius: 3px 0 0 3px;
            border-radius: 3px 0 0 3px;
        }

        .input-daterange input:last-child {
            -webkit-border-radius: 0 3px 3px 0;
            -moz-border-radius: 0 3px 3px 0;
            border-radius: 0 3px 3px 0;
        }

        .input-daterange .add-on {
            display: inline-block;
            width: auto;
            min-width: 16px;
            height: 18px;
            padding: 4px 5px;
            font-weight: normal;
            line-height: 18px;
            text-align: center;
            text-shadow: 0 1px 0 #fff;
            vertical-align: middle;
            background-color: #eee;
            border: 1px solid #ccc;
            margin-left: -5px;
            margin-right: -5px;
        }

        .btn,
        .navbar .navbar-nav>a.btn {
            border-width: 2px;
            font-weight: 400;
            font-size: 0.8571em;
            line-height: 1.35em;
            margin: 5px 1px;
            border: none;
            border-radius: 0.1875rem;
            padding: 11px 22px;
            cursor: pointer;
            background-color: #888;
            color: #FFFFFF;
        }

        .btn:hover,
        .btn:focus,
        .btn:active,
        .btn.active,
        .btn:active:focus,
        .btn:active:hover,
        .btn.active:focus,
        .btn.active:hover,
        .show>.btn.dropdown-toggle,
        .show>.btn.dropdown-toggle:focus,
        .show>.btn.dropdown-toggle:hover,
        .navbar .navbar-nav>a.btn:hover,
        .navbar .navbar-nav>a.btn:focus,
        .navbar .navbar-nav>a.btn:active,
        .navbar .navbar-nav>a.btn.active,
        .navbar .navbar-nav>a.btn:active:focus,
        .navbar .navbar-nav>a.btn:active:hover,
        .navbar .navbar-nav>a.btn.active:focus,
        .navbar .navbar-nav>a.btn.active:hover,
        .show>.navbar .navbar-nav>a.btn.dropdown-toggle,
        .show>.navbar .navbar-nav>a.btn.dropdown-toggle:focus,
        .show>.navbar .navbar-nav>a.btn.dropdown-toggle:hover {
            background-color: #979797;
            color: #FFFFFF;
            box-shadow: none;
        }

        .btn:hover,
        .navbar .navbar-nav>a.btn:hover {
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
        }

        .btn.disabled,
        .btn.disabled:hover,
        .btn.disabled:focus,
        .btn.disabled.focus,
        .btn.disabled:active,
        .btn.disabled.active,
        .btn:disabled,
        .btn:disabled:hover,
        .btn:disabled:focus,
        .btn:disabled.focus,
        .btn:disabled:active,
        .btn:disabled.active,
        .btn[disabled],
        .btn[disabled]:hover,
        .btn[disabled]:focus,
        .btn[disabled].focus,
        .btn[disabled]:active,
        .btn[disabled].active,
        fieldset[disabled] .btn,
        fieldset[disabled] .btn:hover,
        fieldset[disabled] .btn:focus,
        fieldset[disabled] .btn.focus,
        fieldset[disabled] .btn:active,
        fieldset[disabled] .btn.active,
        .navbar .navbar-nav>a.btn.disabled,
        .navbar .navbar-nav>a.btn.disabled:hover,
        .navbar .navbar-nav>a.btn.disabled:focus,
        .navbar .navbar-nav>a.btn.disabled.focus,
        .navbar .navbar-nav>a.btn.disabled:active,
        .navbar .navbar-nav>a.btn.disabled.active,
        .navbar .navbar-nav>a.btn:disabled,
        .navbar .navbar-nav>a.btn:disabled:hover,
        .navbar .navbar-nav>a.btn:disabled:focus,
        .navbar .navbar-nav>a.btn:disabled.focus,
        .navbar .navbar-nav>a.btn:disabled:active,
        .navbar .navbar-nav>a.btn:disabled.active,
        .navbar .navbar-nav>a.btn[disabled],
        .navbar .navbar-nav>a.btn[disabled]:hover,
        .navbar .navbar-nav>a.btn[disabled]:focus,
        .navbar .navbar-nav>a.btn[disabled].focus,
        .navbar .navbar-nav>a.btn[disabled]:active,
        .navbar .navbar-nav>a.btn[disabled].active,
        fieldset[disabled] .navbar .navbar-nav>a.btn,
        fieldset[disabled] .navbar .navbar-nav>a.btn:hover,
        fieldset[disabled] .navbar .navbar-nav>a.btn:focus,
        fieldset[disabled] .navbar .navbar-nav>a.btn.focus,
        fieldset[disabled] .navbar .navbar-nav>a.btn:active,
        fieldset[disabled] .navbar .navbar-nav>a.btn.active {
            background-color: #888;
            border-color: #888;
        }

        .btn.btn-simple,
        .navbar .navbar-nav>a.btn.btn-simple {
            color: #888;
            border-color: #888;
        }

        .btn.btn-simple:hover,
        .btn.btn-simple:focus,
        .btn.btn-simple:active,
        .navbar .navbar-nav>a.btn.btn-simple:hover,
        .navbar .navbar-nav>a.btn.btn-simple:focus,
        .navbar .navbar-nav>a.btn.btn-simple:active {
            background-color: transparent;
            color: #979797;
            border-color: #979797;
            box-shadow: none;
        }

        .btn.btn-link,
        .navbar .navbar-nav>a.btn.btn-link {
            color: #888;
        }

        .btn.btn-link:hover,
        .btn.btn-link:focus,
        .btn.btn-link:active,
        .navbar .navbar-nav>a.btn.btn-link:hover,
        .navbar .navbar-nav>a.btn.btn-link:focus,
        .navbar .navbar-nav>a.btn.btn-link:active {
            background-color: transparent;
            color: #979797;
            text-decoration: none;
            box-shadow: none;
        }

        .btn:hover,
        .btn:focus,
        .navbar .navbar-nav>a.btn:hover,
        .navbar .navbar-nav>a.btn:focus {
            opacity: 1;
            filter: alpha(opacity=100);
            outline: 0 !important;
        }

        .btn:active,
        .btn.active,
        .open>.btn.dropdown-toggle,
        .navbar .navbar-nav>a.btn:active,
        .navbar .navbar-nav>a.btn.active,
        .open>.navbar .navbar-nav>a.btn.dropdown-toggle {
            -webkit-box-shadow: none;
            box-shadow: none;
            outline: 0 !important;
        }

        .btn.btn-icon,
        .navbar .navbar-nav>a.btn.btn-icon {
            height: 2.375rem;
            min-width: 2.375rem;
            width: 2.375rem;
            padding: 0;
            font-size: 0.9375rem;
            overflow: hidden;
            position: relative;
            line-height: normal;
        }

        .btn.btn-icon.btn-simple,
        .navbar .navbar-nav>a.btn.btn-icon.btn-simple {
            padding: 0;
        }

        .btn.btn-icon.btn-sm,
        .navbar .navbar-nav>a.btn.btn-icon.btn-sm {
            height: 1.875rem;
            min-width: 1.875rem;
            width: 1.875rem;
        }

        .btn.btn-icon.btn-sm i.fa,
        .btn.btn-icon.btn-sm i.now-ui-icons,
        .navbar .navbar-nav>a.btn.btn-icon.btn-sm i.fa,
        .navbar .navbar-nav>a.btn.btn-icon.btn-sm i.now-ui-icons {
            font-size: 0.6875rem;
        }

        .btn.btn-icon.btn-lg,
        .navbar .navbar-nav>a.btn.btn-icon.btn-lg {
            height: 3.6rem;
            min-width: 3.6rem;
            width: 3.6rem;
        }

        .btn.btn-icon.btn-lg i.now-ui-icons,
        .btn.btn-icon.btn-lg i.fa,
        .navbar .navbar-nav>a.btn.btn-icon.btn-lg i.now-ui-icons,
        .navbar .navbar-nav>a.btn.btn-icon.btn-lg i.fa {
            font-size: 1.325rem;
        }

        .btn.btn-icon:not(.btn-footer) i.now-ui-icons,
        .btn.btn-icon:not(.btn-footer) i.fa,
        .navbar .navbar-nav>a.btn.btn-icon:not(.btn-footer) i.now-ui-icons,
        .navbar .navbar-nav>a.btn.btn-icon:not(.btn-footer) i.fa {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-12px, -12px);
            line-height: 1.5626rem;
            width: 25px;
        }

        .btn:not(.btn-icon) .now-ui-icons,
        .navbar .navbar-nav>a.btn:not(.btn-icon) .now-ui-icons {
            position: relative;
            top: 1px;
        }

        .btn-primary {
            background-color: #f96332;
            color: #FFFFFF;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active,
        .btn-primary:active:focus,
        .btn-primary:active:hover,
        .btn-primary.active:focus,
        .btn-primary.active:hover,
        .show>.btn-primary.dropdown-toggle,
        .show>.btn-primary.dropdown-toggle:focus,
        .show>.btn-primary.dropdown-toggle:hover {
            background-color: #fa7a50;
            color: #FFFFFF;
            box-shadow: none;
        }

        .btn-primary:hover {
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
        }

        .btn-primary.disabled,
        .btn-primary.disabled:hover,
        .btn-primary.disabled:focus,
        .btn-primary.disabled.focus,
        .btn-primary.disabled:active,
        .btn-primary.disabled.active,
        .btn-primary:disabled,
        .btn-primary:disabled:hover,
        .btn-primary:disabled:focus,
        .btn-primary:disabled.focus,
        .btn-primary:disabled:active,
        .btn-primary:disabled.active,
        .btn-primary[disabled],
        .btn-primary[disabled]:hover,
        .btn-primary[disabled]:focus,
        .btn-primary[disabled].focus,
        .btn-primary[disabled]:active,
        .btn-primary[disabled].active,
        fieldset[disabled] .btn-primary,
        fieldset[disabled] .btn-primary:hover,
        fieldset[disabled] .btn-primary:focus,
        fieldset[disabled] .btn-primary.focus,
        fieldset[disabled] .btn-primary:active,
        fieldset[disabled] .btn-primary.active {
            background-color: #f96332;
            border-color: #f96332;
        }

        .btn-primary.btn-simple {
            color: #f96332;
            border-color: #f96332;
        }

        .btn-primary.btn-simple:hover,
        .btn-primary.btn-simple:focus,
        .btn-primary.btn-simple:active {
            background-color: transparent;
            color: #fa7a50;
            border-color: #fa7a50;
            box-shadow: none;
        }

        .btn-primary.btn-link {
            color: #f96332;
        }

        .btn-primary.btn-link:hover,
        .btn-primary.btn-link:focus,
        .btn-primary.btn-link:active {
            background-color: transparent;
            color: #fa7a50;
            text-decoration: none;
            box-shadow: none;
        }

        .btn-success {
            background-color: #18ce0f;
            color: #FFFFFF;
        }

        .btn-success:hover,
        .btn-success:focus,
        .btn-success:active,
        .btn-success.active,
        .btn-success:active:focus,
        .btn-success:active:hover,
        .btn-success.active:focus,
        .btn-success.active:hover,
        .show>.btn-success.dropdown-toggle,
        .show>.btn-success.dropdown-toggle:focus,
        .show>.btn-success.dropdown-toggle:hover {
            background-color: #1beb11;
            color: #FFFFFF;
            box-shadow: none;
        }

        .btn-success:hover {
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
        }

        .btn-success.disabled,
        .btn-success.disabled:hover,
        .btn-success.disabled:focus,
        .btn-success.disabled.focus,
        .btn-success.disabled:active,
        .btn-success.disabled.active,
        .btn-success:disabled,
        .btn-success:disabled:hover,
        .btn-success:disabled:focus,
        .btn-success:disabled.focus,
        .btn-success:disabled:active,
        .btn-success:disabled.active,
        .btn-success[disabled],
        .btn-success[disabled]:hover,
        .btn-success[disabled]:focus,
        .btn-success[disabled].focus,
        .btn-success[disabled]:active,
        .btn-success[disabled].active,
        fieldset[disabled] .btn-success,
        fieldset[disabled] .btn-success:hover,
        fieldset[disabled] .btn-success:focus,
        fieldset[disabled] .btn-success.focus,
        fieldset[disabled] .btn-success:active,
        fieldset[disabled] .btn-success.active {
            background-color: #18ce0f;
            border-color: #18ce0f;
        }

        .btn-success.btn-simple {
            color: #18ce0f;
            border-color: #18ce0f;
        }

        .btn-success.btn-simple:hover,
        .btn-success.btn-simple:focus,
        .btn-success.btn-simple:active {
            background-color: transparent;
            color: #1beb11;
            border-color: #1beb11;
            box-shadow: none;
        }

        .btn-success.btn-link {
            color: #18ce0f;
        }

        .btn-success.btn-link:hover,
        .btn-success.btn-link:focus,
        .btn-success.btn-link:active {
            background-color: transparent;
            color: #1beb11;
            text-decoration: none;
            box-shadow: none;
        }

        .btn-info {
            background-color: #2CA8FF;
            color: #FFFFFF;
        }

        .btn-info:hover,
        .btn-info:focus,
        .btn-info:active,
        .btn-info.active,
        .btn-info:active:focus,
        .btn-info:active:hover,
        .btn-info.active:focus,
        .btn-info.active:hover,
        .show>.btn-info.dropdown-toggle,
        .show>.btn-info.dropdown-toggle:focus,
        .show>.btn-info.dropdown-toggle:hover {
            background-color: #4bb5ff;
            color: #FFFFFF;
            box-shadow: none;
        }

        .btn-info:hover {
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
        }

        .btn-info.disabled,
        .btn-info.disabled:hover,
        .btn-info.disabled:focus,
        .btn-info.disabled.focus,
        .btn-info.disabled:active,
        .btn-info.disabled.active,
        .btn-info:disabled,
        .btn-info:disabled:hover,
        .btn-info:disabled:focus,
        .btn-info:disabled.focus,
        .btn-info:disabled:active,
        .btn-info:disabled.active,
        .btn-info[disabled],
        .btn-info[disabled]:hover,
        .btn-info[disabled]:focus,
        .btn-info[disabled].focus,
        .btn-info[disabled]:active,
        .btn-info[disabled].active,
        fieldset[disabled] .btn-info,
        fieldset[disabled] .btn-info:hover,
        fieldset[disabled] .btn-info:focus,
        fieldset[disabled] .btn-info.focus,
        fieldset[disabled] .btn-info:active,
        fieldset[disabled] .btn-info.active {
            background-color: #2CA8FF;
            border-color: #2CA8FF;
        }

        .btn-info.btn-simple {
            color: #2CA8FF;
            border-color: #2CA8FF;
        }

        .btn-info.btn-simple:hover,
        .btn-info.btn-simple:focus,
        .btn-info.btn-simple:active {
            background-color: transparent;
            color: #4bb5ff;
            border-color: #4bb5ff;
            box-shadow: none;
        }

        .btn-info.btn-link {
            color: #2CA8FF;
        }

        .btn-info.btn-link:hover,
        .btn-info.btn-link:focus,
        .btn-info.btn-link:active {
            background-color: transparent;
            color: #4bb5ff;
            text-decoration: none;
            box-shadow: none;
        }

        .btn-warning {
            background-color: #FFB236;
            color: #FFFFFF;
        }

        .btn-warning:hover,
        .btn-warning:focus,
        .btn-warning:active,
        .btn-warning.active,
        .btn-warning:active:focus,
        .btn-warning:active:hover,
        .btn-warning.active:focus,
        .btn-warning.active:hover,
        .show>.btn-warning.dropdown-toggle,
        .show>.btn-warning.dropdown-toggle:focus,
        .show>.btn-warning.dropdown-toggle:hover {
            background-color: #ffbe55;
            color: #FFFFFF;
            box-shadow: none;
        }

        .btn-warning:hover {
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
        }

        .btn-warning.disabled,
        .btn-warning.disabled:hover,
        .btn-warning.disabled:focus,
        .btn-warning.disabled.focus,
        .btn-warning.disabled:active,
        .btn-warning.disabled.active,
        .btn-warning:disabled,
        .btn-warning:disabled:hover,
        .btn-warning:disabled:focus,
        .btn-warning:disabled.focus,
        .btn-warning:disabled:active,
        .btn-warning:disabled.active,
        .btn-warning[disabled],
        .btn-warning[disabled]:hover,
        .btn-warning[disabled]:focus,
        .btn-warning[disabled].focus,
        .btn-warning[disabled]:active,
        .btn-warning[disabled].active,
        fieldset[disabled] .btn-warning,
        fieldset[disabled] .btn-warning:hover,
        fieldset[disabled] .btn-warning:focus,
        fieldset[disabled] .btn-warning.focus,
        fieldset[disabled] .btn-warning:active,
        fieldset[disabled] .btn-warning.active {
            background-color: #FFB236;
            border-color: #FFB236;
        }

        .btn-warning.btn-simple {
            color: #FFB236;
            border-color: #FFB236;
        }

        .btn-warning.btn-simple:hover,
        .btn-warning.btn-simple:focus,
        .btn-warning.btn-simple:active {
            background-color: transparent;
            color: #ffbe55;
            border-color: #ffbe55;
            box-shadow: none;
        }

        .btn-warning.btn-link {
            color: #FFB236;
        }

        .btn-warning.btn-link:hover,
        .btn-warning.btn-link:focus,
        .btn-warning.btn-link:active {
            background-color: transparent;
            color: #ffbe55;
            text-decoration: none;
            box-shadow: none;
        }

        .btn-danger {
            background-color: #FF3636;
            color: #FFFFFF;
        }

        .btn-danger:hover,
        .btn-danger:focus,
        .btn-danger:active,
        .btn-danger.active,
        .btn-danger:active:focus,
        .btn-danger:active:hover,
        .btn-danger.active:focus,
        .btn-danger.active:hover,
        .show>.btn-danger.dropdown-toggle,
        .show>.btn-danger.dropdown-toggle:focus,
        .show>.btn-danger.dropdown-toggle:hover {
            background-color: #ff5555;
            color: #FFFFFF;
            box-shadow: none;
        }

        .btn-danger:hover {
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
        }

        .btn-danger.disabled,
        .btn-danger.disabled:hover,
        .btn-danger.disabled:focus,
        .btn-danger.disabled.focus,
        .btn-danger.disabled:active,
        .btn-danger.disabled.active,
        .btn-danger:disabled,
        .btn-danger:disabled:hover,
        .btn-danger:disabled:focus,
        .btn-danger:disabled.focus,
        .btn-danger:disabled:active,
        .btn-danger:disabled.active,
        .btn-danger[disabled],
        .btn-danger[disabled]:hover,
        .btn-danger[disabled]:focus,
        .btn-danger[disabled].focus,
        .btn-danger[disabled]:active,
        .btn-danger[disabled].active,
        fieldset[disabled] .btn-danger,
        fieldset[disabled] .btn-danger:hover,
        fieldset[disabled] .btn-danger:focus,
        fieldset[disabled] .btn-danger.focus,
        fieldset[disabled] .btn-danger:active,
        fieldset[disabled] .btn-danger.active {
            background-color: #FF3636;
            border-color: #FF3636;
        }

        .btn-danger.btn-simple {
            color: #FF3636;
            border-color: #FF3636;
        }

        .btn-danger.btn-simple:hover,
        .btn-danger.btn-simple:focus,
        .btn-danger.btn-simple:active {
            background-color: transparent;
            color: #ff5555;
            border-color: #ff5555;
            box-shadow: none;
        }

        .btn-danger.btn-link {
            color: #FF3636;
        }

        .btn-danger.btn-link:hover,
        .btn-danger.btn-link:focus,
        .btn-danger.btn-link:active {
            background-color: transparent;
            color: #ff5555;
            text-decoration: none;
            box-shadow: none;
        }

        .btn-neutral {
            background-color: #FFFFFF;
            color: #f96332;
        }

        .btn-neutral:hover,
        .btn-neutral:focus,
        .btn-neutral:active,
        .btn-neutral.active,
        .btn-neutral:active:focus,
        .btn-neutral:active:hover,
        .btn-neutral.active:focus,
        .btn-neutral.active:hover,
        .show>.btn-neutral.dropdown-toggle,
        .show>.btn-neutral.dropdown-toggle:focus,
        .show>.btn-neutral.dropdown-toggle:hover {
            background-color: #FFFFFF;
            color: #FFFFFF;
            box-shadow: none;
        }

        .btn-neutral:hover {
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
        }

        .btn-neutral.disabled,
        .btn-neutral.disabled:hover,
        .btn-neutral.disabled:focus,
        .btn-neutral.disabled.focus,
        .btn-neutral.disabled:active,
        .btn-neutral.disabled.active,
        .btn-neutral:disabled,
        .btn-neutral:disabled:hover,
        .btn-neutral:disabled:focus,
        .btn-neutral:disabled.focus,
        .btn-neutral:disabled:active,
        .btn-neutral:disabled.active,
        .btn-neutral[disabled],
        .btn-neutral[disabled]:hover,
        .btn-neutral[disabled]:focus,
        .btn-neutral[disabled].focus,
        .btn-neutral[disabled]:active,
        .btn-neutral[disabled].active,
        fieldset[disabled] .btn-neutral,
        fieldset[disabled] .btn-neutral:hover,
        fieldset[disabled] .btn-neutral:focus,
        fieldset[disabled] .btn-neutral.focus,
        fieldset[disabled] .btn-neutral:active,
        fieldset[disabled] .btn-neutral.active {
            background-color: #FFFFFF;
            border-color: #FFFFFF;
        }

        .btn-neutral.btn-danger {
            color: #FF3636;
        }

        .btn-neutral.btn-danger:hover,
        .btn-neutral.btn-danger:focus,
        .btn-neutral.btn-danger:active {
            color: #ff5555;
        }

        .btn-neutral.btn-info {
            color: #2CA8FF;
        }

        .btn-neutral.btn-info:hover,
        .btn-neutral.btn-info:focus,
        .btn-neutral.btn-info:active {
            color: #4bb5ff;
        }

        .btn-neutral.btn-warning {
            color: #FFB236;
        }

        .btn-neutral.btn-warning:hover,
        .btn-neutral.btn-warning:focus,
        .btn-neutral.btn-warning:active {
            color: #ffbe55;
        }

        .btn-neutral.btn-success {
            color: #18ce0f;
        }

        .btn-neutral.btn-success:hover,
        .btn-neutral.btn-success:focus,
        .btn-neutral.btn-success:active {
            color: #1beb11;
        }

        .btn-neutral.btn-default {
            color: #888;
        }

        .btn-neutral.btn-default:hover,
        .btn-neutral.btn-default:focus,
        .btn-neutral.btn-default:active {
            color: #979797;
        }

        .btn-neutral.active,
        .btn-neutral:active,
        .btn-neutral:active:focus,
        .btn-neutral:active:hover,
        .btn-neutral.active:focus,
        .btn-neutral.active:hover,
        .show>.btn-neutral.dropdown-toggle,
        .show>.btn-neutral.dropdown-toggle:focus,
        .show>.btn-neutral.dropdown-toggle:hover {
            background-color: #FFFFFF;
            color: #fa7a50;
            box-shadow: none;
        }

        .btn-neutral:hover,
        .btn-neutral:focus {
            color: #fa7a50;
        }

        .btn-neutral:hover:not(.nav-link),
        .btn-neutral:focus:not(.nav-link) {
            box-shadow: none;
        }

        .btn-neutral.btn-simple {
            color: #FFFFFF;
            border-color: #FFFFFF;
        }

        .btn-neutral.btn-simple:hover,
        .btn-neutral.btn-simple:focus,
        .btn-neutral.btn-simple:active {
            background-color: transparent;
            color: #FFFFFF;
            border-color: #FFFFFF;
            box-shadow: none;
        }

        .btn-neutral.btn-link {
            color: #FFFFFF;
        }

        .btn-neutral.btn-link:hover,
        .btn-neutral.btn-link:focus,
        .btn-neutral.btn-link:active {
            background-color: transparent;
            color: #FFFFFF;
            text-decoration: none;
            box-shadow: none;
        }

        .btn:disabled,
        .btn[disabled],
        .btn.disabled {
            opacity: 0.5;
            filter: alpha(opacity=50);
        }

        .btn-round {
            border-width: 1px;
            border-radius: 30px !important;
            padding: 11px 23px;
        }

        .btn-round.btn-simple {
            padding: 10px 22px;
        }

        .btn-simple {
            border: 1px solid;
            border-color: #888;
            padding: 10px 22px;
            background-color: transparent;
        }

        .btn-simple.disabled,
        .btn-simple.disabled:hover,
        .btn-simple.disabled:focus,
        .btn-simple.disabled.focus,
        .btn-simple.disabled:active,
        .btn-simple.disabled.active,
        .btn-simple:disabled,
        .btn-simple:disabled:hover,
        .btn-simple:disabled:focus,
        .btn-simple:disabled.focus,
        .btn-simple:disabled:active,
        .btn-simple:disabled.active,
        .btn-simple[disabled],
        .btn-simple[disabled]:hover,
        .btn-simple[disabled]:focus,
        .btn-simple[disabled].focus,
        .btn-simple[disabled]:active,
        .btn-simple[disabled].active,
        fieldset[disabled] .btn-simple,
        fieldset[disabled] .btn-simple:hover,
        fieldset[disabled] .btn-simple:focus,
        fieldset[disabled] .btn-simple.focus,
        fieldset[disabled] .btn-simple:active,
        fieldset[disabled] .btn-simple.active,
        .btn-link.disabled,
        .btn-link.disabled:hover,
        .btn-link.disabled:focus,
        .btn-link.disabled.focus,
        .btn-link.disabled:active,
        .btn-link.disabled.active,
        .btn-link:disabled,
        .btn-link:disabled:hover,
        .btn-link:disabled:focus,
        .btn-link:disabled.focus,
        .btn-link:disabled:active,
        .btn-link:disabled.active,
        .btn-link[disabled],
        .btn-link[disabled]:hover,
        .btn-link[disabled]:focus,
        .btn-link[disabled].focus,
        .btn-link[disabled]:active,
        .btn-link[disabled].active,
        fieldset[disabled] .btn-link,
        fieldset[disabled] .btn-link:hover,
        fieldset[disabled] .btn-link:focus,
        fieldset[disabled] .btn-link.focus,
        fieldset[disabled] .btn-link:active,
        fieldset[disabled] .btn-link.active {
            background-color: transparent;
        }

        .btn-lg {
            font-size: 1em;
            border-radius: 0.25rem;
            padding: 15px 48px;
        }

        .btn-lg.btn-simple {
            padding: 14px 47px;
        }

        .btn-sm {
            font-size: 14px;
            border-radius: 0.1875rem;
            padding: 5px 15px;
        }

        .btn-sm.btn-simple {
            padding: 4px 14px;
        }

        .btn-link {
            border: 0;
            padding: 0.5rem 0.7rem;
            background-color: transparent;
        }

        .btn-wd {
            min-width: 140px;
        }

        .btn-group.select {
            width: 100%;
        }

        .btn-group.select .btn {
            text-align: left;
        }

        .btn-group.select .caret {
            position: absolute;
            top: 50%;
            margin-top: -1px;
            right: 8px;
        }

        .form-control::-moz-placeholder {
            color: #DDDDDD;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .form-control:-moz-placeholder {
            color: #DDDDDD;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .form-control::-webkit-input-placeholder {
            color: #DDDDDD;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .form-control:-ms-input-placeholder {
            color: #DDDDDD;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .form-control {
            background-color: transparent;
            border: 1px solid #E3E3E3;
            border-radius: 30px;
            color: #2c2c2c;
            line-height: normal;
            font-size: 0.8571em;
            -webkit-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
            -moz-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
            -o-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
            -ms-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .has-success .form-control {
            border-color: #E3E3E3;
        }

        .form-control:focus {
            border: 1px solid #0054b4;
            -webkit-box-shadow: none;
            box-shadow: none;
            outline: 0 !important;
            color: #2c2c2c;
        }

        .form-control:focus+.input-group-addon,
        .form-control:focus~.input-group-addon {
            border: 1px solid #f96332;
            border-left: none;
            background-color: transparent;
        }

        .has-success .form-control,
        .has-error .form-control,
        .has-success .form-control:focus,
        .has-error .form-control:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .has-success .form-control:focus {
            border-color: #1be611;
        }

        .has-danger .form-control.form-control-success,
        .has-danger .form-control.form-control-danger,
        .has-success .form-control.form-control-success,
        .has-success .form-control.form-control-danger {
            background-image: none;
        }

        .has-danger .form-control {
            border-color: #ffcfcf;
            color: #FF3636;
            background-color: rgba(222, 222, 222, 0.1);
        }

        .has-danger .form-control:focus {
            background-color: #FFFFFF;
        }

        .form-control+.form-control-feedback {
            border-radius: 0.25rem;
            font-size: 14px;
            margin-top: 0;
            position: absolute;
            left: 18px;
            bottom: -20px;
            vertical-align: middle;
        }

        .open .form-control {
            border-radius: 0.25rem 0.25rem 0 0;
            border-bottom-color: transparent;
        }

        .form-control+.input-group-addon {
            background-color: #FFFFFF;
        }

        .has-success:after,
        .has-danger:after {
            font-family: 'Nucleo Outline';
            content: "\ea22";
            display: inline-block;
            position: absolute;
            right: 15px;
            bottom: 10px;
            color: #18ce0f;
            font-size: 11px;
        }

        .has-success.input-lg:after,
        .has-danger.input-lg:after {
            font-size: 13px;
            top: 13px;
        }

        .has-danger:after {
            content: "\ea53";
            color: #FF3636;
        }

        .form-group.form-group-no-border.input-lg .input-group-addon,
        .input-group.form-group-no-border.input-lg .input-group-addon {
            padding: 15px 0 15px 19px;
        }

        .form-group.form-group-no-border.input-lg .form-control,
        .input-group.form-group-no-border.input-lg .form-control {
            padding: 15px 19px;
        }

        .form-group.form-group-no-border.input-lg .form-control+.input-group-addon,
        .input-group.form-group-no-border.input-lg .form-control+.input-group-addon {
            padding: 15px 19px 15px 0;
        }

        .form-group.input-lg .form-control,
        .input-group.input-lg .form-control {
            padding: 14px 18px;
        }

        .form-group.input-lg .form-control+.input-group-addon,
        .input-group.input-lg .form-control+.input-group-addon {
            padding: 14px 18px 14px 0;
        }

        .form-group.input-lg .input-group-addon,
        .input-group.input-lg .input-group-addon {
            padding: 14px 0 15px 18px;
        }

        .form-group.input-lg .input-group-addon+.form-control,
        .input-group.input-lg .input-group-addon+.form-control {
            padding: 15px 18px 15px 16px;
        }

        .form-group.form-group-no-border .form-control,
        .input-group.form-group-no-border .form-control {
            padding: 11px 19px;
        }

        .form-group.form-group-no-border .form-control+.input-group-addon,
        .input-group.form-group-no-border .form-control+.input-group-addon {
            padding: 11px 19px 11px 0;
        }

        .form-group.form-group-no-border .input-group-addon,
        .input-group.form-group-no-border .input-group-addon {
            padding: 11px 0 11px 19px;
        }

        .form-group .form-control,
        .input-group .form-control {
            padding: 10px 18px 10px 18px;
        }

        .form-group .form-control+.input-group-addon,
        .input-group .form-control+.input-group-addon {
            padding: 10px 18px 10px 0;
        }

        .form-group .input-group-addon,
        .input-group .input-group-addon {
            padding: 10px 0 10px 18px;
        }

        .form-group .input-group-addon+.form-control,
        .form-group .input-group-addon~.form-control,
        .input-group .input-group-addon+.form-control,
        .input-group .input-group-addon~.form-control {
            padding: 10px 19px 11px 16px;
        }

        .form-group.form-group-no-border .form-control,
        .form-group.form-group-no-border .form-control+.input-group-addon,
        .input-group.form-group-no-border .form-control,
        .input-group.form-group-no-border .form-control+.input-group-addon {
            background-color: rgba(222, 222, 222, 0.3);
            border: medium none;
        }

        .form-group.form-group-no-border .form-control:focus,
        .form-group.form-group-no-border .form-control:active,
        .form-group.form-group-no-border .form-control:active,
        .form-group.form-group-no-border .form-control+.input-group-addon:focus,
        .form-group.form-group-no-border .form-control+.input-group-addon:active,
        .form-group.form-group-no-border .form-control+.input-group-addon:active,
        .input-group.form-group-no-border .form-control:focus,
        .input-group.form-group-no-border .form-control:active,
        .input-group.form-group-no-border .form-control:active,
        .input-group.form-group-no-border .form-control+.input-group-addon:focus,
        .input-group.form-group-no-border .form-control+.input-group-addon:active,
        .input-group.form-group-no-border .form-control+.input-group-addon:active {
            border: medium none;
            background-color: rgba(222, 222, 222, 0.5);
        }

        .form-group.form-group-no-border .form-control:focus+.input-group-addon,
        .input-group.form-group-no-border .form-control:focus+.input-group-addon {
            background-color: rgba(222, 222, 222, 0.5);
        }

        .form-group.form-group-no-border .input-group-addon,
        .input-group.form-group-no-border .input-group-addon {
            background-color: rgba(222, 222, 222, 0.3);
            border: none;
        }

        .has-error .form-control-feedback,
        .has-error .control-label {
            color: #FF3636;
        }

        .has-success .form-control-feedback,
        .has-success .control-label {
            color: #18ce0f;
        }

        .input-group-addon {
            background-color: #FFFFFF;
            border: 1px solid #E3E3E3;
            border-radius: 30px;
            color: #555555;
            padding: -0.5rem 0 -0.5rem -0.3rem;
            -webkit-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
            -moz-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
            -o-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
            -ms-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
        }

        .has-success .input-group-addon,
        .has-danger .input-group-addon {
            background-color: #FFFFFF;
        }

        .has-danger .form-control:focus+.input-group-addon {
            color: #FF3636;
        }

        .has-success .form-control:focus+.input-group-addon {
            color: #18ce0f;
        }

        .input-group-addon+.form-control,
        .input-group-addon~.form-control {
            padding: -0.5rem 0.7rem;
            padding-left: 18px;
        }

        .input-group-addon i {
            width: 17px;
        }

        .input-group-focus .input-group-addon {
            background-color: #FFFFFF;
            border-color: #f96332;
        }

        .input-group-focus.form-group-no-border .input-group-addon {
            background-color: rgba(222, 222, 222, 0.5);
        }

        .input-group,
        .form-group {
            margin-bottom: 10px;
        }

        .input-group[disabled] .input-group-addon {
            background-color: #E3E3E3;
        }

        .input-group .form-control:first-child,
        .input-group-addon:first-child,
        .input-group-btn:first-child>.dropdown-toggle,
        .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
            border-right: 0 none;
        }

        .input-group .form-control:last-child,
        .input-group-addon:last-child,
        .input-group-btn:last-child>.dropdown-toggle,
        .input-group-btn:first-child>.btn:not(:first-child) {
            border-left: 0 none;
        }

        .form-control[disabled],
        .form-control[readonly],
        fieldset[disabled] .form-control {
            background-color: #E3E3E3;
            color: #888;
            cursor: not-allowed;
        }

        .input-group-btn .btn {
            border-width: 1px;
            padding: 11px 0.7rem;
        }

        .input-group-btn .btn-default:not(.btn-fill) {
            border-color: #DDDDDD;
        }

        .input-group-btn:last-child>.btn {
            margin-left: 0;
        }

        textarea.form-control {
            max-width: 100%;
            padding: 10px 10px 0 0;
            resize: none;
            border: none;
            border-bottom: 1px solid #E3E3E3;
            border-radius: 0;
            line-height: 2;
        }

        textarea.form-control:focus,
        textarea.form-control:active {
            border-left: none;
            border-top: none;
            border-right: none;
        }

        .has-success.form-group .form-control,
        .has-success.form-group.form-group-no-border .form-control,
        .has-danger.form-group .form-control,
        .has-danger.form-group.form-group-no-border .form-control {
            padding-right: 40px;
        }

        .form-group {
            position: relative;
        }

        .form-group.has-error,
        .form-group.has-danger {
            margin-bottom: 20px;
        }

        .checkbox,
        .radio {
            margin-bottom: 12px;
        }

        .checkbox label,
        .radio label {
            display: inline-block;
            position: relative;
            cursor: pointer;
            padding-left: 35px;
            line-height: 26px;
            margin-bottom: 0;
        }

        .radio label {
            padding-left: 28px;
        }

        .checkbox label::before,
        .checkbox label::after {
            content: " ";
            display: inline-block;
            position: absolute;
            width: 26px;
            height: 26px;
            left: 0;
            cursor: pointer;
            border-radius: 3px;
            top: 0;
            background-color: transparent;
            border: 1px solid #E3E3E3;
            -webkit-transition: opacity 0.3s linear;
            -moz-transition: opacity 0.3s linear;
            -o-transition: opacity 0.3s linear;
            -ms-transition: opacity 0.3s linear;
            transition: opacity 0.3s linear;
        }

        .checkbox label::after {
            font-family: 'Nucleo Outline';
            content: "\ea22";
            top: 0px;
            text-align: center;
            font-size: 14px;
            opacity: 0;
            color: #555555;
            border: 0;
            background-color: inherit;
        }

        .checkbox input[type="checkbox"],
        .radio input[type="radio"] {
            opacity: 0;
            position: absolute;
            visibility: hidden;
        }

        .checkbox input[type="checkbox"]:checked+label::after {
            opacity: 1;
        }

        .checkbox input[type="checkbox"]:disabled+label,
        .radio input[type="radio"]:disabled+label {
            color: #9A9A9A;
            opacity: .5;
        }

        .checkbox input[type="checkbox"]:disabled+label::before,
        .checkbox input[type="checkbox"]:disabled+label::after {
            cursor: not-allowed;
        }

        .checkbox input[type="checkbox"]:disabled+label,
        .radio input[type="radio"]:disabled+label {
            cursor: not-allowed;
        }

        .checkbox.checkbox-circle label::before {
            border-radius: 50%;
        }

        .checkbox.checkbox-inline {
            margin-top: 0;
        }

        .checkbox-primary input[type="checkbox"]:checked+label::before {
            background-color: #428bca;
            border-color: #428bca;
        }

        .checkbox-primary input[type="checkbox"]:checked+label::after {
            color: #fff;
        }

        .checkbox-danger input[type="checkbox"]:checked+label::before {
            background-color: #d9534f;
            border-color: #d9534f;
        }

        .checkbox-danger input[type="checkbox"]:checked+label::after {
            color: #fff;
        }

        .checkbox-info input[type="checkbox"]:checked+label::before {
            background-color: #5bc0de;
            border-color: #5bc0de;
        }

        .checkbox-info input[type="checkbox"]:checked+label::after {
            color: #fff;
        }

        .checkbox-warning input[type="checkbox"]:checked+label::before {
            background-color: #f0ad4e;
            border-color: #f0ad4e;
        }

        .checkbox-warning input[type="checkbox"]:checked+label::after {
            color: #fff;
        }

        .checkbox-success input[type="checkbox"]:checked+label::before {
            background-color: #5cb85c;
            border-color: #5cb85c;
        }

        .checkbox-success input[type="checkbox"]:checked+label::after {
            color: #fff;
        }

        .radio label::before,
        .radio label::after {
            content: " ";
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 1px solid #E3E3E3;
            display: inline-block;
            position: absolute;
            left: 3px;
            top: 3px;
            padding: 1px;
            -webkit-transition: opacity 0.3s linear;
            -moz-transition: opacity 0.3s linear;
            -o-transition: opacity 0.3s linear;
            -ms-transition: opacity 0.3s linear;
            transition: opacity 0.3s linear;
        }

        .radio input[type="radio"]+label:after,
        .radio input[type="radio"] {
            opacity: 0;
        }

        .radio input[type="radio"]:checked+label::after {
            width: 4px;
            height: 4px;
            background-color: #555555;
            border-color: #555555;
            top: 11px;
            left: 11px;
            opacity: 1;
        }

        .radio input[type="radio"]:checked+label::after {
            opacity: 1;
        }

        .radio input[type="radio"]:disabled+label {
            color: #9A9A9A;
        }

        .radio input[type="radio"]:disabled+label::before,
        .radio input[type="radio"]:disabled+label::after {
            color: #9A9A9A;
        }

        .radio.radio-inline {
            margin-top: 0;
        }

        .progress-container {
            position: relative;
        }

        .progress-container+.progress-container,
        .progress-container~.progress-container {
            margin-top: 15px;
        }

        .progress-container .progress-badge {
            color: #888;
            font-size: 0.8571em;
            text-transform: uppercase;
        }

        .progress-container .progress {
            height: 1px;
            border-radius: 0;
            box-shadow: none;
            background: rgba(222, 222, 222, 0.8);
            margin-top: 14px;
        }

        .progress-container .progress .progress-bar {
            box-shadow: none;
            background-color: #888;
        }

        .progress-container .progress .progress-value {
            position: absolute;
            top: 2px;
            right: 0;
            color: #888;
            font-size: 0.8571em;
        }

        .progress-container.progress-neutral .progress {
            background: rgba(255, 255, 255, 0.3);
        }

        .progress-container.progress-neutral .progress-bar {
            background: #FFFFFF;
        }

        .progress-container.progress-neutral .progress-value,
        .progress-container.progress-neutral .progress-badge {
            color: #FFFFFF;
        }

        .progress-container.progress-primary .progress {
            background: rgba(249, 99, 50, 0.3);
        }

        .progress-container.progress-primary .progress-bar {
            background: #f96332;
        }

        .progress-container.progress-primary .progress-value,
        .progress-container.progress-primary .progress-badge {
            color: #f96332;
        }

        .progress-container.progress-info .progress {
            background: rgba(44, 168, 255, 0.3);
        }

        .progress-container.progress-info .progress-bar {
            background: #2CA8FF;
        }

        .progress-container.progress-info .progress-value,
        .progress-container.progress-info .progress-badge {
            color: #2CA8FF;
        }

        .progress-container.progress-success .progress {
            background: rgba(24, 206, 15, 0.3);
        }

        .progress-container.progress-success .progress-bar {
            background: #18ce0f;
        }

        .progress-container.progress-success .progress-value,
        .progress-container.progress-success .progress-badge {
            color: #18ce0f;
        }

        .progress-container.progress-warning .progress {
            background: rgba(255, 178, 54, 0.3);
        }

        .progress-container.progress-warning .progress-bar {
            background: #FFB236;
        }

        .progress-container.progress-warning .progress-value,
        .progress-container.progress-warning .progress-badge {
            color: #FFB236;
        }

        .progress-container.progress-danger .progress {
            background: rgba(255, 54, 54, 0.3);
        }

        .progress-container.progress-danger .progress-bar {
            background: #FF3636;
        }

        .progress-container.progress-danger .progress-value,
        .progress-container.progress-danger .progress-badge {
            color: #FF3636;
        }

        /*           badges             */

        .badge {
            border-radius: 8px;
            padding: 4px 8px;
            text-transform: uppercase;
            font-size: 0.7142em;
            line-height: 12px;
            background-color: transparent;
            border: 1px solid;
            margin-bottom: 5px;
            border-radius: 0.875rem;
        }

        .badge-icon {
            padding: 0.4em 0.55em;
        }

        .badge-icon i {
            font-size: 0.8em;
        }

        .badge-default {
            border-color: #888;
            color: #888;
        }

        .badge-primary {
            border-color: #f96332;
            color: #f96332;
        }

        .badge-info {
            border-color: #2CA8FF;
            color: #2CA8FF;
        }

        .badge-success {
            border-color: #18ce0f;
            color: #18ce0f;
        }

        .badge-warning {
            border-color: #FFB236;
            color: #FFB236;
        }

        .badge-danger {
            border-color: #FF3636;
            color: #FF3636;
        }

        .badge-neutral {
            border-color: #FFFFFF;
            color: #FFFFFF;
        }

        .pagination .page-item .page-link {
            border: 0;
            border-radius: 30px !important;
            transition: all .3s;
            padding: 0px 11px;
            margin: 0 3px;
            min-width: 30px;
            text-align: center;
            height: 30px;
            line-height: 30px;
            color: #2c2c2c;
            cursor: pointer;
            font-size: 14px;
            text-transform: uppercase;
            background: transparent;
        }

        .pagination .page-item .page-link:hover,
        .pagination .page-item .page-link:focus {
            color: #2c2c2c;
            background-color: rgba(222, 222, 222, 0.3);
            border: none;
        }

        .pagination .arrow-margin-left,
        .pagination .arrow-margin-right {
            position: absolute;
        }

        .pagination .arrow-margin-right {
            right: 0;
        }

        .pagination .arrow-margin-left {
            left: 0;
        }

        .pagination .page-item.active>.page-link {
            color: #E3E3E3;
            box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
        }

        .pagination .page-item.active>.page-link,
        .pagination .page-item.active>.page-link:focus,
        .pagination .page-item.active>.page-link:hover {
            background-color: #888;
            border-color: #888;
            color: #FFFFFF;
        }

        .pagination .page-item.disabled>.page-link {
            opacity: .5;
            background-color: rgba(255, 255, 255, 0.2);
            color: #FFFFFF;
        }

        .pagination.pagination-info .page-item.active>.page-link,
        .pagination.pagination-info .page-item.active>.page-link:focus,
        .pagination.pagination-info .page-item.active>.page-link:hover {
            background-color: #2CA8FF;
            border-color: #2CA8FF;
        }

        .pagination.pagination-success .page-item.active>.page-link,
        .pagination.pagination-success .page-item.active>.page-link:focus,
        .pagination.pagination-success .page-item.active>.page-link:hover {
            background-color: #18ce0f;
            border-color: #18ce0f;
        }

        .pagination.pagination-primary .page-item.active>.page-link,
        .pagination.pagination-primary .page-item.active>.page-link:focus,
        .pagination.pagination-primary .page-item.active>.page-link:hover {
            background-color: #f96332;
            border-color: #f96332;
        }

        .pagination.pagination-warning .page-item.active>.page-link,
        .pagination.pagination-warning .page-item.active>.page-link:focus,
        .pagination.pagination-warning .page-item.active>.page-link:hover {
            background-color: #FFB236;
            border-color: #FFB236;
        }

        .pagination.pagination-danger .page-item.active>.page-link,
        .pagination.pagination-danger .page-item.active>.page-link:focus,
        .pagination.pagination-danger .page-item.active>.page-link:hover {
            background-color: #FF3636;
            border-color: #FF3636;
        }

        .pagination.pagination-neutral .page-item>.page-link {
            color: #FFFFFF;
        }

        .pagination.pagination-neutral .page-item>.page-link:focus,
        .pagination.pagination-neutral .page-item>.page-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: #FFFFFF;
        }

        .pagination.pagination-neutral .page-item.active>.page-link,
        .pagination.pagination-neutral .page-item.active>.page-link:focus,
        .pagination.pagination-neutral .page-item.active>.page-link:hover {
            background-color: #FFFFFF;
            border-color: #FFFFFF;
            color: #f96332;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 400;
        }

        small {
            font-size: 60%;
        }

        a {
            color: #f96332;
        }

        a:hover,
        a:focus {
            color: #f96332;
        }

        h1,
        .h1 {
            font-size: 3.5em;
            line-height: 1.15;
            margin-bottom: 30px;
        }

        h1 small,
        .h1 small {
            font-weight: 700;
            text-transform: uppercase;
            opacity: .8;
        }

        h2,
        .h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        h3,
        .h3 {
            font-size: 2em;
            margin-bottom: 30px;
            line-height: 1.4em;
        }

        h4,
        .h4 {
            font-size: 1.714em;
            line-height: 1.45em;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        h4+.category,
        h4.title+.category,
        .h4+.category,
        .h4.title+.category {
            margin-top: -10px;
        }

        h5,
        .h5 {
            font-size: 1.57em;
            line-height: 1.4em;
            margin-bottom: 15px;
        }

        h6,
        .h6 {
            font-size: 1em;
            font-weight: 700;
            text-transform: uppercase;
        }

        p {
            line-height: 1.61em;
        }

        .description p,
        p.description {
            font-size: 1.14em;
        }

        .title {
            font-weight: 700;
        }

        .title.title-up {
            text-transform: uppercase;
        }

        .title.title-up a {
            color: #2c2c2c;
            text-decoration: none;
        }

        .title+.category {
            margin-top: -25px;
        }

        .description,
        .card-description,
        .footer-big p {
            color: #9A9A9A;
            font-weight: 300;
        }

        .category {
            text-transform: uppercase;
            font-weight: 700;
            color: #9A9A9A;
        }

        .text-primary {
            color: #f96332 !important;
        }

        .text-info {
            color: #2CA8FF !important;
        }

        .text-success {
            color: #18ce0f !important;
        }

        .text-warning {
            color: #FFB236 !important;
        }

        .text-danger {
            color: #FF3636 !important;
        }

        .text-black {
            color: #444;
        }

        .blockquote {
            border-left: none;
            border: 1px solid #888;
            padding: 20px;
            font-size: 1.1em;
            line-height: 1.8;
        }

        .blockquote small {
            color: #888;
            font-size: 0.8571em;
            text-transform: uppercase;
        }

        .blockquote.blockquote-primary {
            border-color: #f96332;
            color: #f96332;
        }

        .blockquote.blockquote-primary small {
            color: #f96332;
        }

        .blockquote.blockquote-danger {
            border-color: #FF3636;
            color: #FF3636;
        }

        .blockquote.blockquote-danger small {
            color: #FF3636;
        }

        .blockquote.blockquote-white {
            border-color: rgba(255, 255, 255, 0.8);
            color: #FFFFFF;
        }

        .blockquote.blockquote-white small {
            color: rgba(255, 255, 255, 0.8);
        }

        body {
            color: #2c2c2c;
            font-size: 14px;
            font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
        }

        .main {
            position: relative;
            background: #FFFFFF;
        }

        /* Animations */

        .nav-pills .nav-link,
        .nav-item .nav-link,
        .navbar,
        .nav-tabs .nav-link {
            -webkit-transition: all 300ms ease 0s;
            -moz-transition: all 300ms ease 0s;
            -o-transition: all 300ms ease 0s;
            -ms-transition: all 300ms ease 0s;
            transition: all 300ms ease 0s;
        }

        .dropdown-toggle:after,
        .bootstrap-switch-label:before {
            -webkit-transition: all 150ms ease 0s;
            -moz-transition: all 150ms ease 0s;
            -o-transition: all 150ms ease 0s;
            -ms-transition: all 150ms ease 0s;
            transition: all 150ms ease 0s;
        }

        .dropdown-toggle[aria-expanded="true"]:after {
            filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .button-bar {
            display: block;
            position: relative;
            width: 22px;
            height: 1px;
            border-radius: 1px;
            background: #FFFFFF;
        }

        .button-bar+.button-bar {
            margin-top: 7px;
        }

        .button-bar:nth-child(2) {
            width: 17px;
        }

        .open {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1;
            filter: alpha(opacity=100);
            visibility: visible;
        }

        .separator {
            height: 2px;
            width: 44px;
            background-color: #888;
            margin: 20px auto;
        }

        .separator.separator-primary {
            background-color: #f96332;
        }

        .nav-pills .nav-item .nav-link {
            padding: 0 15.5px;
            text-align: center;
            height: 60px;
            width: 60px;
            font-weight: 400;
            color: #9A9A9A;
            margin-right: 19px;
            background-color: rgba(222, 222, 222, 0.3);
            border-radius: 30px;
        }

        .nav-pills .nav-item .nav-link:hover {
            background-color: rgba(222, 222, 222, 0.3);
        }

        .nav-pills .nav-item .nav-link.active,
        .nav-pills .nav-item .nav-link.active:focus,
        .nav-pills .nav-item .nav-link.active:hover {
            background-color: #9A9A9A;
            color: #FFFFFF;
            box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3);
        }

        .nav-pills .nav-item .nav-link.disabled,
        .nav-pills .nav-item .nav-link:disabled,
        .nav-pills .nav-item .nav-link[disabled] {
            opacity: .5;
        }

        .nav-pills .nav-item i {
            display: block;
            font-size: 20px;
            line-height: 60px;
        }

        .nav-pills.nav-pills-neutral .nav-item .nav-link {
            background-color: rgba(255, 255, 255, 0.2);
            color: #FFFFFF;
        }

        .nav-pills.nav-pills-neutral .nav-item .nav-link.active,
        .nav-pills.nav-pills-neutral .nav-item .nav-link.active:focus,
        .nav-pills.nav-pills-neutral .nav-item .nav-link.active:hover {
            background-color: #FFFFFF;
            color: #f96332;
        }

        .nav-pills.nav-pills-primary .nav-item .nav-link.active,
        .nav-pills.nav-pills-primary .nav-item .nav-link.active:focus,
        .nav-pills.nav-pills-primary .nav-item .nav-link.active:hover {
            background-color: #f96332;
        }

        .nav-pills.nav-pills-info .nav-item .nav-link.active,
        .nav-pills.nav-pills-info .nav-item .nav-link.active:focus,
        .nav-pills.nav-pills-info .nav-item .nav-link.active:hover {
            background-color: #2CA8FF;
        }

        .nav-pills.nav-pills-success .nav-item .nav-link.active,
        .nav-pills.nav-pills-success .nav-item .nav-link.active:focus,
        .nav-pills.nav-pills-success .nav-item .nav-link.active:hover {
            background-color: #18ce0f;
        }

        .nav-pills.nav-pills-warning .nav-item .nav-link.active,
        .nav-pills.nav-pills-warning .nav-item .nav-link.active:focus,
        .nav-pills.nav-pills-warning .nav-item .nav-link.active:hover {
            background-color: #FFB236;
        }

        .nav-pills.nav-pills-danger .nav-item .nav-link.active,
        .nav-pills.nav-pills-danger .nav-item .nav-link.active:focus,
        .nav-pills.nav-pills-danger .nav-item .nav-link.active:hover {
            background-color: #FF3636;
        }

        .tab-space {
            padding: 20px 0 50px 0px;
        }

        .nav-align-center {
            text-align: center;
        }

        .nav-align-center .nav-pills {
            display: inline-flex;
        }

        .btn-twitter {
            color: #55acee;
        }

        .btn-twitter:hover,
        .btn-twitter:focus,
        .btn-twitter:active {
            color: #3ea1ec;
        }

        .btn-facebook {
            color: #3b5998;
        }

        .btn-facebook:hover,
        .btn-facebook:focus,
        .btn-facebook:active {
            color: #344e86;
        }

        .btn-google {
            color: #dd4b39;
        }

        .btn-google:hover,
        .btn-google:focus,
        .btn-google:active {
            color: #d73925;
        }

        .btn-linkedin {
            color: #0077B5;
        }

        .btn-linkedin:hover,
        .btn-linkedin:focus,
        .btn-linkedin:active {
            color: #00669c;
        }

        .nav-tabs {
            border: 0;
            padding: 15px 0.7rem;
        }

        .nav-tabs>.nav-item>.nav-link {
            color: #888;
            margin: 0;
            margin-right: 5px;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: 30px;
            font-size: 14px;
            padding: 11px 23px;
            line-height: 1.5;
        }

        .nav-tabs>.nav-item>.nav-link:hover {
            background-color: transparent;
        }

        .nav-tabs>.nav-item>.nav-link.active {
            border: 1px solid #888;
            border-radius: 30px;
        }

        .nav-tabs>.nav-item>.nav-link i.now-ui-icons {
            font-size: 14px;
            position: relative;
            top: 1px;
            margin-right: 3px;
        }

        .nav-tabs>.nav-item.disabled>.nav-link,
        .nav-tabs>.nav-item.disabled>.nav-link:hover {
            color: rgba(255, 255, 255, 0.5);
        }

        .nav-tabs.nav-tabs-neutral>.nav-item>.nav-link {
            color: #FFFFFF;
        }

        .nav-tabs.nav-tabs-neutral>.nav-item>.nav-link.active {
            border-color: rgba(255, 255, 255, 0.5);
            color: #FFFFFF;
        }

        .nav-tabs.nav-tabs-primary>.nav-item>.nav-link.active {
            border-color: #f96332;
            color: #f96332;
        }

        .nav-tabs.nav-tabs-info>.nav-item>.nav-link.active {
            border-color: #2CA8FF;
            color: #2CA8FF;
        }

        .nav-tabs.nav-tabs-danger>.nav-item>.nav-link.active {
            border-color: #FF3636;
            color: #FF3636;
        }

        .nav-tabs.nav-tabs-warning>.nav-item>.nav-link.active {
            border-color: #FFB236;
            color: #FFB236;
        }

        .nav-tabs.nav-tabs-success>.nav-item>.nav-link.active {
            border-color: #18ce0f;
            color: #18ce0f;
        }

        .navbar {
            padding-top: 0.625rem;
            padding-bottom: 0.625rem;
            min-height: 53px;
            margin-bottom: 20px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.15);
        }

        .navbar a {
            vertical-align: middle;
        }

        .navbar a:not(.btn):not(.dropdown-item) {
            color: #FFFFFF;
        }

        .navbar p {
            display: inline-block;
            margin: 0;
            line-height: 21px;
        }

        .navbar .navbar-nav.navbar-logo {
            position: absolute;
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 49px;
            top: -4px;
        }

        .navbar .navbar-nav .nav-link.btn {
            padding: 11px 22px;
        }

        .navbar .navbar-nav .nav-link.btn.btn-lg {
            padding: 15px 48px;
        }

        .navbar .navbar-nav .nav-link.btn.btn-sm {
            padding: 5px 15px;
        }

        .navbar .navbar-nav .nav-link:not(.btn) {
            text-transform: uppercase;
            font-size: 0.7142em;
            padding: 0.5rem 0.7rem;
            line-height: 1.625rem;
        }

        .navbar .navbar-nav .nav-link:not(.btn) i.fa+p,
        .navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons+p {
            margin-left: 5px;
        }

        .navbar .navbar-nav .nav-link:not(.btn) i.fa,
        .navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons {
            font-size: 18px;
            position: relative;
            top: 2px;
            text-align: center;
            width: 21px;
        }

        .navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons {
            top: 4px;
            font-size: 16px;
        }

        .navbar .navbar-nav .nav-link:not(.btn).profile-photo .profile-photo-small {
            width: 27px;
            height: 27px;
        }

        .navbar .navbar-nav .nav-link:not(.btn).disabled {
            opacity: .5;
            color: #FFFFFF;
        }

        .navbar .navbar-nav .nav-item.active .nav-link:not(.btn),
        .navbar .navbar-nav .nav-item .nav-link:not(.btn):focus,
        .navbar .navbar-nav .nav-item .nav-link:not(.btn):hover,
        .navbar .navbar-nav .nav-item .nav-link:not(.btn):active {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 0.1875rem;
        }

        .navbar .logo-container {
            width: 27px;
            height: 27px;
            overflow: hidden;
            margin: 0 auto;
            border-radius: 50%;
            border: 1px solid transparent;
        }

        .navbar .navbar-brand {
            text-transform: uppercase;
            font-size: 0.8571em;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            line-height: 1.625rem;
        }

        .navbar .navbar-toggler {
            width: 37px;
            height: 27px;
            outline: 0;
            cursor: pointer;
        }

        .navbar .navbar-toggler.navbar-toggler-left {
            position: relative;
            left: 0;
            padding-left: 0;
        }

        .navbar .navbar-toggler:hover .navbar-toggler-bar.bar2 {
            width: 22px;
        }

        .navbar .button-dropdown .navbar-toggler-bar:nth-child(2) {
            width: 17px;
        }

        .navbar.navbar-transparent {
            background-color: transparent !important;
            box-shadow: none;
            color: #FFFFFF;
            padding-top: 20px;
        }

        .navbar.bg-white:not(.navbar-transparent) a:not(.dropdown-item) {
            color: #888;
        }

        .navbar.bg-white:not(.navbar-transparent) a:not(.dropdown-item).disabled {
            opacity: .5;
            color: #888;
        }

        .navbar.bg-white:not(.navbar-transparent) .button-bar {
            background: #888;
        }

        .navbar.bg-white:not(.navbar-transparent) .nav-item.active .nav-link:not(.btn),
        .navbar.bg-white:not(.navbar-transparent) .nav-item .nav-link:not(.btn):focus,
        .navbar.bg-white:not(.navbar-transparent) .nav-item .nav-link:not(.btn):hover,
        .navbar.bg-white:not(.navbar-transparent) .nav-item .nav-link:not(.btn):active {
            background-color: rgba(222, 222, 222, 0.3);
        }

        .navbar.bg-white:not(.navbar-transparent) .logo-container {
            border: 1px solid #888;
        }

        .bg-default {
            background-color: #888 !important;
        }

        .bg-primary {
            background-color: #f96332 !important;
        }

        .bg-info {
            background-color: #2CA8FF !important;
        }

        .bg-success {
            background-color: #18ce0f !important;
        }

        .bg-danger {
            background-color: #FF3636 !important;
        }

        .bg-warning {
            background-color: #FFB236 !important;
        }

        .bg-white {
            background-color: #FFFFFF !important;
        }

        .dropdown-menu {
            border: 0;
            box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.2);
            border-radius: 0.125rem;
            -webkit-transition: all 150ms linear;
            -moz-transition: all 150ms linear;
            -o-transition: all 150ms linear;
            -ms-transition: all 150ms linear;
            transition: all 150ms linear;
            font-size: 14px;
        }

        .dropdown-menu.dropdown-menu-right:before {
            left: auto;
            right: 10px;
        }

        .dropdown-menu:before {
            display: inline-block;
            position: absolute;
            width: 0;
            height: 0;
            vertical-align: middle;
            content: "";
            top: -5px;
            left: 10px;
            right: auto;
            color: #FFFFFF;
            border-bottom: .4em solid;
            border-right: .4em solid transparent;
            border-left: .4em solid transparent;
        }

        .dropdown-menu .dropdown-item {
            font-size: 0.8571em;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            -webkit-transition: all 150ms linear;
            -moz-transition: all 150ms linear;
            -o-transition: all 150ms linear;
            -ms-transition: all 150ms linear;
            transition: all 150ms linear;
        }

        .dropdown-menu .dropdown-item:hover,
        .dropdown-menu .dropdown-item:focus {
            background-color: rgba(222, 222, 222, 0.3);
        }

        .dropdown-menu .dropdown-divider {
            background-color: rgba(222, 222, 222, 0.5);
        }

        .dropdown-menu .dropdown-header:not([href]):not([tabindex]) {
            color: rgba(182, 182, 182, 0.6);
            font-size: 0.7142em;
            text-transform: uppercase;
            font-weight: 700;
        }

        .dropdown-menu.dropdown-primary {
            background-color: #f95823;
        }

        .dropdown-menu.dropdown-primary:before {
            color: #f95823;
        }

        .dropdown-menu.dropdown-primary .dropdown-header:not([href]):not([tabindex]) {
            color: rgba(255, 255, 255, 0.8);
        }

        .dropdown-menu.dropdown-primary .dropdown-item {
            color: #FFFFFF;
        }

        .dropdown-menu.dropdown-primary .dropdown-item:hover,
        .dropdown-menu.dropdown-primary .dropdown-item:focus {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .dropdown-menu.dropdown-primary .dropdown-divider {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .dropdown-menu.dropdown-info {
            background-color: #1da2ff;
        }

        .dropdown-menu.dropdown-info:before {
            color: #1da2ff;
        }

        .dropdown-menu.dropdown-info .dropdown-header:not([href]):not([tabindex]) {
            color: rgba(255, 255, 255, 0.8);
        }

        .dropdown-menu.dropdown-info .dropdown-item {
            color: #FFFFFF;
        }

        .dropdown-menu.dropdown-info .dropdown-item:hover,
        .dropdown-menu.dropdown-info .dropdown-item:focus {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .dropdown-menu.dropdown-info .dropdown-divider {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .dropdown-menu.dropdown-danger {
            background-color: #ff2727;
        }

        .dropdown-menu.dropdown-danger:before {
            color: #ff2727;
        }

        .dropdown-menu.dropdown-danger .dropdown-header:not([href]):not([tabindex]) {
            color: rgba(255, 255, 255, 0.8);
        }

        .dropdown-menu.dropdown-danger .dropdown-item {
            color: #FFFFFF;
        }

        .dropdown-menu.dropdown-danger .dropdown-item:hover,
        .dropdown-menu.dropdown-danger .dropdown-item:focus {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .dropdown-menu.dropdown-danger .dropdown-divider {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .dropdown-menu.dropdown-success {
            background-color: #16c00e;
        }

        .dropdown-menu.dropdown-success:before {
            color: #16c00e;
        }

        .dropdown-menu.dropdown-success .dropdown-header:not([href]):not([tabindex]) {
            color: rgba(255, 255, 255, 0.8);
        }

        .dropdown-menu.dropdown-success .dropdown-item {
            color: #FFFFFF;
        }

        .dropdown-menu.dropdown-success .dropdown-item:hover,
        .dropdown-menu.dropdown-success .dropdown-item:focus {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .dropdown-menu.dropdown-success .dropdown-divider {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .dropdown-menu.dropdown-warning {
            background-color: #ffac27;
        }

        .dropdown-menu.dropdown-warning:before {
            color: #ffac27;
        }

        .dropdown-menu.dropdown-warning .dropdown-header:not([href]):not([tabindex]) {
            color: rgba(255, 255, 255, 0.8);
        }

        .dropdown-menu.dropdown-warning .dropdown-item {
            color: #FFFFFF;
        }

        .dropdown-menu.dropdown-warning .dropdown-item:hover,
        .dropdown-menu.dropdown-warning .dropdown-item:focus {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .dropdown-menu.dropdown-warning .dropdown-divider {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .dropdown .dropdown-menu {
            -webkit-transform: translate3d(0, -25px, 0);
            -moz-transform: translate3d(0, -25px, 0);
            -o-transform: translate3d(0, -25px, 0);
            -ms-transform: translate3d(0, -25px, 0);
            transform: translate3d(0, -25px, 0);
            visibility: hidden;
            display: block;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .dropdown.show .dropdown-menu,
        .dropdown-menu.open {
            opacity: 1;
            filter: alpha(opacity=100);
            visibility: visible;
            -webkit-transform: translate3d(0, 0px, 0);
            -moz-transform: translate3d(0, 0px, 0);
            -o-transform: translate3d(0, 0px, 0);
            -ms-transform: translate3d(0, 0px, 0);
            transform: translate3d(0, 0px, 0);
        }

        .navbar .dropdown.show .dropdown-menu {
            -webkit-transform: translate3d(0, 7px, 0);
            -moz-transform: translate3d(0, 7px, 0);
            -o-transform: translate3d(0, 7px, 0);
            -ms-transform: translate3d(0, 7px, 0);
            transform: translate3d(0, 7px, 0);
        }

        .button-dropdown {
            padding-right: 0.7rem;
            cursor: pointer;
        }

        .button-dropdown .dropdown-toggle {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            display: block;
        }

        .button-dropdown .dropdown-toggle:after {
            display: none;
        }

        .alert {
            border: 0;
            border-radius: 0;
            color: #FFFFFF;
            padding-top: .9rem;
            padding-bottom: .9rem;
            position: relative;
        }

        .alert.alert-success {
            background-color: rgba(24, 206, 15, 0.8);
        }

        .alert.alert-danger {
            background-color: rgba(255, 54, 54, 0.8);
        }

        .alert.alert-warning {
            background-color: rgba(255, 178, 54, 0.8);
        }

        .alert.alert-info {
            background-color: rgba(44, 168, 255, 0.8);
        }

        .alert.alert-primary {
            background-color: rgba(249, 99, 50, 0.8);
        }

        .alert .alert-icon {
            display: block;
            float: left;
            margin-right: 15px;
            margin-top: -1px;
        }

        .alert strong {
            text-transform: uppercase;
            font-size: 12px;
        }

        .alert i.fa,
        .alert i.now-ui-icons {
            font-size: 20px;
        }

        .alert .close {
            color: #FFFFFF;
            opacity: .9;
            text-shadow: none;
            line-height: 0;
            outline: 0;
        }

        img {
            max-width: 100%;
            border-radius: 1px;
        }

        .img-raised {
            box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
        }

        .popover {
            font-size: 14px;
            box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.2);
            border: none;
            line-height: 1.7;
            max-width: 240px;
        }

        .popover.bs-popover-top .arrow:before,
        .popover.bs-popover-left .arrow:before,
        .popover.bs-popover-right .arrow:before,
        .popover.bs-popover-bottom .arrow:before {
            border-top-color: transparent;
            border-left-color: transparent;
            border-right-color: transparent;
            border-bottom-color: transparent;
        }

        .popover .popover-header {
            color: rgba(182, 182, 182, 0.6);
            font-size: 14px;
            text-transform: capitalize;
            font-weight: 600;
            margin: 0;
            margin-top: 5px;
            border: none;
            background-color: transparent;
        }

        .popover:before {
            display: none;
        }

        .popover.bs-tether-element-attached-top:after {
            border-bottom-color: #FFFFFF;
            top: -9px;
        }

        .popover.popover-primary {
            background-color: #f96332;
        }

        .popover.popover-primary .popover-body {
            color: #FFFFFF;
        }

        .popover.popover-primary.bs-popover-right .arrow:after {
            border-right-color: #f96332;
        }

        .popover.popover-primary.bs-popover-top .arrow:after {
            border-top-color: #f96332;
        }

        .popover.popover-primary.bs-popover-bottom .arrow:after {
            border-bottom-color: #f96332;
        }

        .popover.popover-primary.bs-popover-left .arrow:after {
            border-left-color: #f96332;
        }

        .popover.popover-primary .popover-header {
            color: #FFFFFF;
            opacity: .6;
        }

        .popover.popover-info {
            background-color: #2CA8FF;
        }

        .popover.popover-info .popover-body {
            color: #FFFFFF;
        }

        .popover.popover-info.bs-popover-right .arrow:after {
            border-right-color: #2CA8FF;
        }

        .popover.popover-info.bs-popover-top .arrow:after {
            border-top-color: #2CA8FF;
        }

        .popover.popover-info.bs-popover-bottom .arrow:after {
            border-bottom-color: #2CA8FF;
        }

        .popover.popover-info.bs-popover-left .arrow:after {
            border-left-color: #2CA8FF;
        }

        .popover.popover-info .popover-header {
            color: #FFFFFF;
            opacity: .6;
        }

        .popover.popover-warning {
            background-color: #FFB236;
        }

        .popover.popover-warning .popover-body {
            color: #FFFFFF;
        }

        .popover.popover-warning.bs-popover-right .arrow:after {
            border-right-color: #FFB236;
        }

        .popover.popover-warning.bs-popover-top .arrow:after {
            border-top-color: #FFB236;
        }

        .popover.popover-warning.bs-popover-bottom .arrow:after {
            border-bottom-color: #FFB236;
        }

        .popover.popover-warning.bs-popover-left .arrow:after {
            border-left-color: #FFB236;
        }

        .popover.popover-warning .popover-header {
            color: #FFFFFF;
            opacity: .6;
        }

        .popover.popover-danger {
            background-color: #FF3636;
        }

        .popover.popover-danger .popover-body {
            color: #FFFFFF;
        }

        .popover.popover-danger.bs-popover-right .arrow:after {
            border-right-color: #FF3636;
        }

        .popover.popover-danger.bs-popover-top .arrow:after {
            border-top-color: #FF3636;
        }

        .popover.popover-danger.bs-popover-bottom .arrow:after {
            border-bottom-color: #FF3636;
        }

        .popover.popover-danger.bs-popover-left .arrow:after {
            border-left-color: #FF3636;
        }

        .popover.popover-danger .popover-header {
            color: #FFFFFF;
            opacity: .6;
        }

        .popover.popover-success {
            background-color: #18ce0f;
        }

        .popover.popover-success .popover-body {
            color: #FFFFFF;
        }

        .popover.popover-success.bs-popover-right .arrow:after {
            border-right-color: #18ce0f;
        }

        .popover.popover-success.bs-popover-top .arrow:after {
            border-top-color: #18ce0f;
        }

        .popover.popover-success.bs-popover-bottom .arrow:after {
            border-bottom-color: #18ce0f;
        }

        .popover.popover-success.bs-popover-left .arrow:after {
            border-left-color: #18ce0f;
        }

        .popover.popover-success .popover-header {
            color: #FFFFFF;
            opacity: .6;
        }

        .tooltip.bs-tooltip-right .arrow:before {
            border-right-color: #FFFFFF;
        }

        .tooltip.bs-tooltip-top .arrow:before {
            border-top-color: #FFFFFF;
        }

        .tooltip.bs-tooltip-bottom .arrow:before {
            border-bottom-color: #FFFFFF;
        }

        .tooltip.bs-tooltip-left .arrow:before {
            border-left-color: #FFFFFF;
        }

        .tooltip-inner {
            padding: 0.5rem 0.7rem;
            min-width: 130px;
            background-color: #FFFFFF;
            font-size: 14px;
            color: inherit;
            box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
        }

        /* --------------------------------

Nucleo Outline Web Font - nucleoapp.com/
License - nucleoapp.com/license/
Created using IcoMoon - icomoon.io

-------------------------------- */

        @font-face {
            font-family: 'Nucleo Outline';
            src: url("../fonts/nucleo-outline.eot");
            src: url("../fonts/nucleo-outline.eot") format("embedded-opentype"), url("../fonts/nucleo-outline.woff2") format("woff2"), url("../fonts/nucleo-outline.woff") format("woff"), url("../fonts/nucleo-outline.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        /*------------------------
	base class definition
-------------------------*/

        .now-ui-icons {
            display: inline-block;
            font: normal normal normal 14px/1 'Nucleo Outline';
            font-size: inherit;
            speak: none;
            text-transform: none;
            /* Better Font Rendering */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /*------------------------
  change icon size
-------------------------*/

        /*----------------------------------
  add a square/circle background
-----------------------------------*/

        .now-ui-icons.circle {
            padding: 0.33333333em;
            vertical-align: -16%;
            background-color: #eee;
        }

        .now-ui-icons.circle {
            border-radius: 50%;
        }

        /*------------------------
  list icons
-------------------------*/

        .nc-icon-ul {
            padding-left: 0;
            margin-left: 2.14285714em;
            list-style-type: none;
        }

        .nc-icon-ul>li {
            position: relative;
        }

        .nc-icon-ul>li>.now-ui-icons {
            position: absolute;
            left: -1.57142857em;
            top: 0.14285714em;
            text-align: center;
        }

        .nc-icon-ul>li>.now-ui-icons.circle {
            top: -0.19047619em;
            left: -1.9047619em;
        }

        /*------------------------
  spinning icons
-------------------------*/

        .now-ui-icons.spin {
            -webkit-animation: nc-icon-spin 2s infinite linear;
            -moz-animation: nc-icon-spin 2s infinite linear;
            animation: nc-icon-spin 2s infinite linear;
        }

        @-webkit-keyframes nc-icon-spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @-moz-keyframes nc-icon-spin {
            0% {
                -moz-transform: rotate(0deg);
            }
            100% {
                -moz-transform: rotate(360deg);
            }
        }

        @keyframes nc-icon-spin {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        /*------------------------
  rotated/flipped icons
-------------------------*/

        /*------------------------
	font icons
-------------------------*/

        .now-ui-icons.ui-1_check:before {
            content: "\ea22";
        }

        .now-ui-icons.ui-1_email-85:before {
            content: "\ea2a";
        }

        .now-ui-icons.arrows-1_cloud-download-93:before {
            content: "\ea21";
        }

        .now-ui-icons.arrows-1_cloud-upload-94:before {
            content: "\ea24";
        }

        .now-ui-icons.arrows-1_minimal-down:before {
            content: "\ea39";
        }

        .now-ui-icons.arrows-1_minimal-left:before {
            content: "\ea3a";
        }

        .now-ui-icons.arrows-1_minimal-right:before {
            content: "\ea3b";
        }

        .now-ui-icons.arrows-1_minimal-up:before {
            content: "\ea3c";
        }

        .now-ui-icons.arrows-1_refresh-69:before {
            content: "\ea44";
        }

        .now-ui-icons.arrows-1_share-66:before {
            content: "\ea4c";
        }

        .now-ui-icons.business_badge:before {
            content: "\ea09";
        }

        .now-ui-icons.business_bank:before {
            content: "\ea0a";
        }

        .now-ui-icons.business_briefcase-24:before {
            content: "\ea13";
        }

        .now-ui-icons.business_bulb-63:before {
            content: "\ea15";
        }

        .now-ui-icons.business_chart-bar-32:before {
            content: "\ea1e";
        }

        .now-ui-icons.business_chart-pie-36:before {
            content: "\ea1f";
        }

        .now-ui-icons.business_globe:before {
            content: "\ea2f";
        }

        .now-ui-icons.business_money-coins:before {
            content: "\ea40";
        }

        .now-ui-icons.clothes_tie-bow:before {
            content: "\ea5b";
        }

        .now-ui-icons.design_vector:before {
            content: "\ea61";
        }

        .now-ui-icons.design_app:before {
            content: "\ea08";
        }

        .now-ui-icons.design_bullet-list-67:before {
            content: "\ea14";
        }

        .now-ui-icons.design_image:before {
            content: "\ea33";
        }

        .now-ui-icons.design_palette:before {
            content: "\ea41";
        }

        .now-ui-icons.design_scissors:before {
            content: "\ea4a";
        }

        .now-ui-icons.design-2_html5:before {
            content: "\ea32";
        }

        .now-ui-icons.design-2_ruler-pencil:before {
            content: "\ea48";
        }

        .now-ui-icons.emoticons_satisfied:before {
            content: "\ea49";
        }

        .now-ui-icons.files_box:before {
            content: "\ea12";
        }

        .now-ui-icons.files_paper:before {
            content: "\ea43";
        }

        .now-ui-icons.files_single-copy-04:before {
            content: "\ea52";
        }

        .now-ui-icons.health_ambulance:before {
            content: "\ea07";
        }

        .now-ui-icons.loader_gear:before {
            content: "\ea4e";
        }

        .now-ui-icons.loader_refresh:before {
            content: "\ea44";
        }

        .now-ui-icons.location_bookmark:before {
            content: "\ea10";
        }

        .now-ui-icons.location_compass-05:before {
            content: "\ea25";
        }

        .now-ui-icons.location_map-big:before {
            content: "\ea3d";
        }

        .now-ui-icons.location_pin:before {
            content: "\ea47";
        }

        .now-ui-icons.location_world:before {
            content: "\ea63";
        }

        .now-ui-icons.media-1_album:before {
            content: "\ea02";
        }

        .now-ui-icons.media-1_button-pause:before {
            content: "\ea16";
        }

        .now-ui-icons.media-1_button-play:before {
            content: "\ea18";
        }

        .now-ui-icons.media-1_button-power:before {
            content: "\ea19";
        }

        .now-ui-icons.media-1_camera-compact:before {
            content: "\ea1c";
        }

        .now-ui-icons.media-2_note-03:before {
            content: "\ea3f";
        }

        .now-ui-icons.media-2_sound-wave:before {
            content: "\ea57";
        }

        .now-ui-icons.objects_diamond:before {
            content: "\ea29";
        }

        .now-ui-icons.objects_globe:before {
            content: "\ea2f";
        }

        .now-ui-icons.objects_key-25:before {
            content: "\ea38";
        }

        .now-ui-icons.objects_planet:before {
            content: "\ea46";
        }

        .now-ui-icons.objects_spaceship:before {
            content: "\ea55";
        }

        .now-ui-icons.objects_support-17:before {
            content: "\ea56";
        }

        .now-ui-icons.objects_umbrella-13:before {
            content: "\ea5f";
        }

        .now-ui-icons.education_agenda-bookmark:before {
            content: "\ea01";
        }

        .now-ui-icons.education_atom:before {
            content: "\ea0c";
        }

        .now-ui-icons.education_glasses:before {
            content: "\ea2d";
        }

        .now-ui-icons.education_hat:before {
            content: "\ea30";
        }

        .now-ui-icons.education_paper:before {
            content: "\ea42";
        }

        .now-ui-icons.shopping_bag-16:before {
            content: "\ea0d";
        }

        .now-ui-icons.shopping_basket:before {
            content: "\ea0b";
        }

        .now-ui-icons.shopping_box:before {
            content: "\ea11";
        }

        .now-ui-icons.shopping_cart-simple:before {
            content: "\ea1d";
        }

        .now-ui-icons.shopping_credit-card:before {
            content: "\ea28";
        }

        .now-ui-icons.shopping_delivery-fast:before {
            content: "\ea27";
        }

        .now-ui-icons.shopping_shop:before {
            content: "\ea50";
        }

        .now-ui-icons.shopping_tag-content:before {
            content: "\ea59";
        }

        .now-ui-icons.sport_trophy:before {
            content: "\ea5d";
        }

        .now-ui-icons.sport_user-run:before {
            content: "\ea60";
        }

        .now-ui-icons.tech_controller-modern:before {
            content: "\ea26";
        }

        .now-ui-icons.tech_headphones:before {
            content: "\ea31";
        }

        .now-ui-icons.tech_laptop:before {
            content: "\ea36";
        }

        .now-ui-icons.tech_mobile:before {
            content: "\ea3e";
        }

        .now-ui-icons.tech_tablet:before {
            content: "\ea58";
        }

        .now-ui-icons.tech_tv:before {
            content: "\ea5e";
        }

        .now-ui-icons.tech_watch-time:before {
            content: "\ea62";
        }

        .now-ui-icons.text_align-center:before {
            content: "\ea05";
        }

        .now-ui-icons.text_align-left:before {
            content: "\ea06";
        }

        .now-ui-icons.text_bold:before {
            content: "\ea0e";
        }

        .now-ui-icons.text_caps-small:before {
            content: "\ea1b";
        }

        .now-ui-icons.gestures_tap-01:before {
            content: "\ea5a";
        }

        .now-ui-icons.transportation_air-baloon:before {
            content: "\ea03";
        }

        .now-ui-icons.transportation_bus-front-12:before {
            content: "\ea17";
        }

        .now-ui-icons.travel_info:before {
            content: "\ea04";
        }

        .now-ui-icons.travel_istanbul:before {
            content: "\ea34";
        }

        .now-ui-icons.ui-1_bell-53:before {
            content: "\ea0f";
        }

        .now-ui-icons.ui-1_calendar-60:before {
            content: "\ea1a";
        }

        .now-ui-icons.ui-1_lock-circle-open:before {
            content: "\ea35";
        }

        .now-ui-icons.ui-1_send:before {
            content: "\ea4d";
        }

        .now-ui-icons.ui-1_settings-gear-63:before {
            content: "\ea4e";
        }

        .now-ui-icons.ui-1_simple-add:before {
            content: "\ea4f";
        }

        .now-ui-icons.ui-1_simple-delete:before {
            content: "\ea54";
        }

        .now-ui-icons.ui-1_simple-remove:before {
            content: "\ea53";
        }

        .now-ui-icons.ui-1_zoom-bold:before {
            content: "\ea64";
        }

        .now-ui-icons.ui-2_chat-round:before {
            content: "\ea20";
        }

        .now-ui-icons.ui-2_favourite-28:before {
            content: "\ea2b";
        }

        .now-ui-icons.ui-2_like:before {
            content: "\ea37";
        }

        .now-ui-icons.ui-2_settings-90:before {
            content: "\ea4b";
        }

        .now-ui-icons.ui-2_time-alarm:before {
            content: "\ea5c";
        }

        .now-ui-icons.users_circle-08:before {
            content: "\ea23";
        }

        .now-ui-icons.users_single-02:before {
            content: "\ea51";
        }

        .modal-content {
            border-radius: 0.1875rem;
            border: none;
            box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.5);
        }

        .modal-content .modal-header {
            border-bottom: none;
            padding-top: 24px;
            padding-right: 24px;
            padding-bottom: 0;
            padding-left: 24px;
        }

        .modal-content .modal-header button {
            position: absolute;
            right: 27px;
            top: 30px;
            outline: 0;
        }

        .modal-content .modal-header .title {
            margin-top: 5px;
            margin-bottom: 0;
        }

        .modal-content .modal-body {
            padding-top: 24px;
            padding-right: 24px;
            padding-bottom: 16px;
            padding-left: 24px;
            line-height: 1.9;
        }

        .modal-content .modal-footer {
            border-top: none;
            padding-right: 24px;
            padding-bottom: 16px;
            padding-left: 24px;
            -webkit-justify-content: space-between;
            /* Safari 6.1+ */
            justify-content: space-between;
        }

        .modal-content .modal-footer button {
            margin: 0;
            padding-left: 16px;
            padding-right: 16px;
            width: auto;
        }

        .modal-content .modal-footer button.pull-left {
            padding-left: 5px;
            padding-right: 5px;
            position: relative;
            left: -5px;
        }

        .modal-content .modal-body+.modal-footer {
            padding-top: 0;
        }

        .modal-backdrop {
            background: rgba(0, 0, 0, 0.3);
        }

        .modal.modal-mini p {
            text-align: center;
        }

        .modal.modal-mini .modal-dialog {
            max-width: 255px;
            margin: 0 auto;
        }

        .modal.modal-mini .modal-profile {
            width: 70px;
            height: 70px;
            background-color: #FFFFFF;
            border-radius: 50%;
            text-align: center;
            line-height: 5.9;
            box-shadow: 0px 5px 50px 0px rgba(0, 0, 0, 0.3);
        }

        .modal.modal-mini .modal-profile i {
            color: #f96332;
            font-size: 21px;
        }

        .modal.modal-mini .modal-profile[class*="modal-profile-"] i {
            color: #FFFFFF;
        }

        .modal.modal-mini .modal-profile.modal-profile-primary {
            background-color: #f96332;
        }

        .modal.modal-mini .modal-profile.modal-profile-danger {
            background-color: #FF3636;
        }

        .modal.modal-mini .modal-profile.modal-profile-warning {
            background-color: #FFB236;
        }

        .modal.modal-mini .modal-profile.modal-profile-success {
            background-color: #18ce0f;
        }

        .modal.modal-mini .modal-profile.modal-profile-info {
            background-color: #2CA8FF;
        }

        .modal.modal-mini .modal-footer button {
            text-transform: uppercase;
        }

        .modal.modal-mini .modal-footer button:first-child {
            opacity: .5;
        }

        .modal.modal-default .modal-content {
            background-color: #FFFFFF;
            color: #2c2c2c;
        }

        .modal.modal-default .modal-header .close {
            color: #2c2c2c;
        }

        .modal.modal-primary .modal-content {
            background-color: #f96332;
            color: #FFFFFF;
        }

        .modal.modal-primary .modal-header .close {
            color: #FFFFFF;
        }

        .modal.modal-danger .modal-content {
            background-color: #FF3636;
            color: #FFFFFF;
        }

        .modal.modal-danger .modal-header .close {
            color: #FFFFFF;
        }

        .modal.modal-warning .modal-content {
            background-color: #FFB236;
            color: #FFFFFF;
        }

        .modal.modal-warning .modal-header .close {
            color: #FFFFFF;
        }

        .modal.modal-success .modal-content {
            background-color: #18ce0f;
            color: #FFFFFF;
        }

        .modal.modal-success .modal-header .close {
            color: #FFFFFF;
        }

        .modal.modal-info .modal-content {
            background-color: #2CA8FF;
            color: #FFFFFF;
        }

        .modal.modal-info .modal-header .close {
            color: #FFFFFF;
        }

        .modal.show.modal-mini .modal-dialog {
            -webkit-transform: translate(0, 30%);
            -o-transform: translate(0, 30%);
            transform: translate(0, 30%);
        }

        .modal .modal-header .close {
            color: #FF3636;
            text-shadow: none;
        }

        .modal .modal-header .close:hover,
        .modal .modal-header .close:focus {
            opacity: 1;
        }

        .carousel-item-next,
        .carousel-item-prev,
        .carousel-item.active {
            display: block;
        }

        .carousel .carousel-inner {
            box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
        }

        .carousel .now-ui-icons {
            font-size: 2em;
        }

        .card {
            border: 0;
            border-radius: 0.1875rem;
            display: inline-block;
            position: relative;
            overflow: hidden;
            width: 100%;
            margin-bottom: 20px;
            box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
        }

        .card .card-body {
            min-height: 190px;
        }

        .card[data-background-color="orange"] {
            background-color: #f96332;
        }

        .card[data-background-color="red"] {
            background-color: #FF3636;
        }

        .card[data-background-color="yellow"] {
            background-color: #FFB236;
        }

        .card[data-background-color="blue"] {
            background-color: #2CA8FF;
        }

        .card[data-background-color="green"] {
            background-color: #18ce0f;
        }

        .card-signup {
            max-width: 350px;
            margin: 0 auto;
        }

        .card-signup .header {
            margin-left: 20px;
            margin-right: 20px;
            padding: 30px 0;
        }

        .card-signup .text-divider {
            margin-top: 30px;
            margin-bottom: 0px;
            text-align: center;
        }

        .card-signup .card-body {
            padding-top: 0px;
            padding-bottom: 0px;
            min-height: auto;
        }

        .card-signup .checkbox {
            margin-top: 20px;
        }

        .card-signup .checkbox label {
            margin-left: 17px;
        }

        .card-signup .checkbox .checkbox-material {
            padding-right: 12px;
        }

        .card-signup .social-line {
            margin-top: 20px;
            text-align: center;
        }

        .card-signup .social-line .btn.btn-icon,
        .card-signup .social-line .btn.btn-icon .btn-icon -mini {
            margin-left: 5px;
            margin-right: 5px;
            box-shadow: 0px 5px 50px 0px rgba(0, 0, 0, 0.2);
        }

        .card-signup .footer {
            margin-bottom: 10px;
            margin-top: 24px;
        }

        .card-plain {
            background: transparent;
            box-shadow: none;
        }

        .card-plain .header {
            margin-left: 0;
            margin-right: 0;
        }

        .card-plain .content {
            padding-left: 0;
            padding-right: 0;
        }

        .footer {
            padding: 24px 0;
        }

        .footer.footer-default {
            background-color: #f2f2f2;
        }

        .footer nav {
            display: inline-block;
            float: left;
        }

        .footer ul {
            margin-bottom: 0;
            padding: 0;
            list-style: none;
        }

        .footer ul li {
            display: inline-block;
        }

        .footer ul li a {
            color: inherit;
            padding: 0.5rem;
            font-size: 0.8571em;
            text-transform: uppercase;
            text-decoration: none;
        }

        .footer ul li a:hover {
            text-decoration: none;
        }

        .footer .copyright {
            font-size: 0.8571em;
        }

        .footer:after {
            display: table;
            clear: both;
            content: " ";
        }

        .index-page .page-header {
            height: 125vh;
        }

        .index-page .page-header .container>.content-center {
            top: 37%;
        }

        .index-page .page-header .category-absolute {
            position: absolute;
            top: 100vh;
            margin-top: -60px;
            padding: 0 15px;
            width: 100%;
            color: rgba(255, 255, 255, 0.5);
        }

        .landing-page .header {
            height: 100vh;
            position: relative;
        }

        .landing-page .header .container {
            padding-top: 26vh;
            color: #FFFFFF;
            z-index: 2;
            position: relative;
        }

        .landing-page .header .share {
            margin-top: 150px;
        }

        .landing-page .header h1 {
            font-weight: 600;
        }

        .landing-page .header .title {
            color: #FFFFFF;
        }

        .landing-page .section-team .team .team-player img {
            max-width: 100px;
        }

        .landing-page .section-team .team-player {
            margin-bottom: 15px;
        }

        .landing-page .section-contact-us .title {
            margin-bottom: 15px;
        }

        .landing-page .section-contact-us .description {
            margin-bottom: 30px;
        }

        .landing-page .section-contact-us .input-group,
        .landing-page .section-contact-us .send-button,
        .landing-page .section-contact-us .textarea-container {
            padding: 0 40px;
        }

        .landing-page .section-contact-us .textarea-container {
            margin: 40px 0;
        }

        .landing-page .section-contact-us a.btn {
            margin-top: 35px;
        }

        .profile-page .page-header {
            min-height: 550px;
        }

        .profile-page .profile-container {
            color: #FFFFFF;
        }

        .profile-page .photo-container {
            width: 123px;
            height: 123px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
            box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
        }

        .profile-page .title {
            text-align: center;
            margin-top: 30px;
        }

        .profile-page .description,
        .profile-page .category {
            text-align: center;
        }

        .profile-page h5.description {
            max-width: 700px;
            margin: 20px auto 75px;
        }

        .profile-page .nav-align-center {
            margin-top: 30px;
        }

        .profile-page .content {
            max-width: 450px;
            margin: 0 auto;
        }

        .profile-page .content .social-description {
            display: inline-block;
            max-width: 150px;
            width: 145px;
            text-align: center;
            margin: 15px 0 0px;
        }

        .profile-page .content .social-description h2 {
            margin-bottom: 15px;
        }

        .profile-page .button-container {
            text-align: center;
            margin-top: -106px;
        }

        .profile-page .collections img {
            margin-bottom: 30px;
        }

        .profile-page .gallery {
            margin-top: 45px;
            padding-bottom: 50px;
        }

        .section-full-page:after,
        .section-full-page:before {
            display: block;
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 2;
        }

        .section-full-page:before {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .section-full-page[filter-color="purple"]:after,
        .section-full-page[filter-color="primary"]:after {
            background: rgba(227, 227, 227, 0.26);
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(90deg, rgba(227, 227, 227, 0.26), rgba(249, 99, 50, 0.95));
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(90deg, rgba(227, 227, 227, 0.26), rgba(249, 99, 50, 0.95));
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(90deg, rgba(227, 227, 227, 0.26), rgba(249, 99, 50, 0.95));
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(0deg, rgba(227, 227, 227, 0.26), rgba(249, 99, 50, 0.95));
            /* Standard syntax */
        }

        .section-full-page[data-image]:after {
            opacity: .5;
        }

        .section-full-page>.content,
        .section-full-page>.footer {
            position: relative;
            z-index: 4;
        }

        .section-full-page>.content {
            min-height: calc(100vh - 80px);
        }

        .section-full-page .full-page-background {
            position: absolute;
            z-index: 1;
            height: 100%;
            width: 100%;
            display: block;
            top: 0;
            left: 0;
            background-size: cover;
            background-position: center center;
        }

        .section-full-page .footer nav>ul a:not(.btn),
        .section-full-page .footer,
        .section-full-page .footer .copyright a {
            color: #FFFFFF;
        }

        .login-page .card-login {
            border-radius: 0.25rem;
            padding-bottom: 0.7rem;
            max-width: 320px;
        }

        .login-page .card-login .btn-wd {
            min-width: 180px;
        }

        .login-page .card-login .logo-container {
            width: 65px;
            margin: 0 auto;
            margin-bottom: 55px;
        }

        .login-page .card-login .logo-container img {
            width: 100%;
        }

        .login-page .card-login .input-group:last-child {
            margin-bottom: 40px;
        }

        .login-page .card-login.card-plain .form-control::-moz-placeholder {
            color: #000000;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .login-page .card-login.card-plain .form-control:-moz-placeholder {
            color: #000000;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .login-page .card-login.card-plain .form-control::-webkit-input-placeholder {
            color: #000000;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .login-page .card-login.card-plain .form-control:-ms-input-placeholder {
            color: #000000;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .login-page .card-login.card-plain .form-control {
            border-color: rgba(0, 0, 0, 0.5);
            color: #000000;
        }

        .login-page .card-login.card-plain .form-control:focus {
            border-color: #000000;
            background-color: transparent;
            color: #000000;
        }

        .login-page .card-login.card-plain .has-success:after,
        .login-page .card-login.card-plain .has-danger:after {
            color: #000000;
        }

        .login-page .card-login.card-plain .has-danger .form-control {
            background-color: transparent;
        }

        .login-page .card-login.card-plain .input-group-addon {
            background-color: transparent;
            border-color: rgba(0, 0, 0, 0.5);
            color: #000000;
        }

        .login-page .card-login.card-plain .input-group-focus .input-group-addon {
            background-color: transparent;
            border-color: #000000;
            color: #000000;
        }

        .login-page .card-login.card-plain .form-group.form-group-no-border .form-control,
        .login-page .card-login.card-plain .input-group.form-group-no-border .form-control {
            background-color: rgba(0, 0, 0, 0.1);
            color: #000000;
        }

        .login-page .card-login.card-plain .form-group.form-group-no-border .form-control:focus,
        .login-page .card-login.card-plain .form-group.form-group-no-border .form-control:active,
        .login-page .card-login.card-plain .form-group.form-group-no-border .form-control:active,
        .login-page .card-login.card-plain .input-group.form-group-no-border .form-control:focus,
        .login-page .card-login.card-plain .input-group.form-group-no-border .form-control:active,
        .login-page .card-login.card-plain .input-group.form-group-no-border .form-control:active {
            background-color: rgba(0, 0, 0, 0.2);
            color: #000000;
        }

        .login-page .card-login.card-plain .form-group.form-group-no-border .form-control+.input-group-addon,
        .login-page .card-login.card-plain .input-group.form-group-no-border .form-control+.input-group-addon {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .login-page .card-login.card-plain .form-group.form-group-no-border .form-control+.input-group-addon:focus,
        .login-page .card-login.card-plain .form-group.form-group-no-border .form-control+.input-group-addon:active,
        .login-page .card-login.card-plain .form-group.form-group-no-border .form-control+.input-group-addon:active,
        .login-page .card-login.card-plain .input-group.form-group-no-border .form-control+.input-group-addon:focus,
        .login-page .card-login.card-plain .input-group.form-group-no-border .form-control+.input-group-addon:active,
        .login-page .card-login.card-plain .input-group.form-group-no-border .form-control+.input-group-addon:active {
            background-color: rgba(0, 0, 0, 0.2);
            color: #000000;
        }

        .login-page .card-login.card-plain .form-group.form-group-no-border .form-control:focus+.input-group-addon,
        .login-page .card-login.card-plain .input-group.form-group-no-border .form-control:focus+.input-group-addon {
            background-color: rgba(0, 0, 0, 0.2);
            color: #000000;
        }

        .login-page .card-login.card-plain .form-group.form-group-no-border .input-group-addon,
        .login-page .card-login.card-plain .input-group.form-group-no-border .input-group-addon {
            background-color: rgba(0, 0, 0, 0.1);
            border: none;
            color: #000000;
        }

        .login-page .card-login.card-plain .form-group.form-group-no-border.input-group-focus .input-group-addon,
        .login-page .card-login.card-plain .input-group.form-group-no-border.input-group-focus .input-group-addon {
            background-color: rgba(0, 0, 0, 0.2);
            color: #000000;
        }

        .login-page .card-login.card-plain .input-group-addon,
        .login-page .card-login.card-plain .form-group.form-group-no-border .input-group-addon,
        .login-page .card-login.card-plain .input-group.form-group-no-border .input-group-addon {
            color: rgba(0, 0, 0, 0.8);
        }

        .login-page .link {
            font-size: 10px;
            color: #000000;
            text-decoration: none;
        }

        .section {
            padding: 70px 0;
            position: relative;
            background: #FFFFFF;
        }

        .section .row+.category {
            margin-top: 15px;
        }

        .section-navbars {
            padding-bottom: 0;
        }

        .section-full-screen {
            height: 100vh;
        }

        .section-signup {
            padding-top: 20vh;
        }

        .page-header {
            height: 100vh;
            max-height: 1050px;
            padding: 0;
            color: #000000;
            position: relative;
            background-position: center center;
            background-size: cover;
        }

        .page-header .page-header-image {
            position: absolute;
            background-size: cover;
            background-position: center center;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .page-header footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .page-header .container {
            height: 100%;
            z-index: 1;
            text-align: center;
            position: relative;
        }

        .page-header .container>.content-center {
            position: absolute;
            top: 20%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
            padding: 0 15px;
            color: #000000;
            width: 100%;
            max-width: 880px;
        }

        .page-header .category,
        .page-header .description {
            color: rgba(0, 0, 0, 0.5);
        }

        .page-header.page-header-small {
            height: 60vh;
            max-height: 440px;
        }

        .page-header:after,
        .page-header:before {
            position: absolute;
            z-index: 0;
            width: 100%;
            height: 100%;
            display: block;
            left: 0;
            top: 0;
            content: "";
        }

        .page-header:before {
            background-color: rgb(255, 255, 255);
        }

        .page-header[filter-color="orange"] {
            background: rgba(44, 44, 44, 0.2);
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(0, 13, 71, 0.6));
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(3, 18, 224, 0.6));
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(90deg, rgba(44, 44, 44, 0.2), rgba(2, 29, 148, 0.6));
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(0, 44, 189, 0.6));
            /* Standard syntax */
        }

        .page-header .container {
            z-index: 2;
        }

        .clear-filter:after,
        .clear-filter:before {
            display: none;
        }

        .section-story-overview {
            padding: 50px 0;
        }

        .section-story-overview .image-container {
            height: 335px;
            position: relative;
            background-position: center center;
            background-size: cover;
            box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
            border-radius: .25rem;
        }

        .section-story-overview .image-container+.category {
            padding-top: 15px;
        }

        .section-story-overview .image-container.image-right {
            z-index: 2;
        }

        .section-story-overview .image-container.image-right+h3.title {
            margin-top: 120px;
        }

        .section-story-overview .image-container.image-left {
            z-index: 1;
        }

        .section-story-overview .image-container:nth-child(2) {
            margin-top: 420px;
            margin-left: -105px;
        }

        .section-story-overview p.blockquote {
            width: 220px;
            min-height: 180px;
            text-align: left;
            position: absolute;
            top: 376px;
            right: 155px;
            z-index: 0;
        }

        .section-nucleo-icons .nucleo-container img {
            width: auto;
            left: 0;
            top: 0;
            height: 100%;
            position: absolute;
        }

        .section-nucleo-icons .nucleo-container {
            height: 335px;
            position: relative;
        }

        .section-nucleo-icons h5 {
            margin-bottom: 35px;
        }

        .section-nucleo-icons .icons-container {
            position: relative;
            max-width: 450px;
            height: 300px;
            max-height: 300px;
            margin: 0 auto;
        }

        .section-nucleo-icons .icons-container i {
            font-size: 34px;
            position: absolute;
            left: 0;
            top: 0;
        }

        .section-nucleo-icons .icons-container i:nth-child(1) {
            top: 5%;
            left: 7%;
        }

        .section-nucleo-icons .icons-container i:nth-child(2) {
            top: 28%;
            left: 24%;
        }

        .section-nucleo-icons .icons-container i:nth-child(3) {
            top: 40%;
        }

        .section-nucleo-icons .icons-container i:nth-child(4) {
            top: 18%;
            left: 62%;
        }

        .section-nucleo-icons .icons-container i:nth-child(5) {
            top: 74%;
            left: 3%;
        }

        .section-nucleo-icons .icons-container i:nth-child(6) {
            top: 36%;
            left: 44%;
            font-size: 65px;
            color: #f96332;
            padding: 1px;
        }

        .section-nucleo-icons .icons-container i:nth-child(7) {
            top: 59%;
            left: 26%;
        }

        .section-nucleo-icons .icons-container i:nth-child(8) {
            top: 60%;
            left: 69%;
        }

        .section-nucleo-icons .icons-container i:nth-child(9) {
            top: 72%;
            left: 47%;
        }

        .section-nucleo-icons .icons-container i:nth-child(10) {
            top: 88%;
            left: 27%;
        }

        .section-nucleo-icons .icons-container i:nth-child(11) {
            top: 31%;
            left: 80%;
        }

        .section-nucleo-icons .icons-container i:nth-child(12) {
            top: 88%;
            left: 68%;
        }

        .section-nucleo-icons .icons-container i:nth-child(13) {
            top: 5%;
            left: 81%;
        }

        .section-nucleo-icons .icons-container i:nth-child(14) {
            top: 58%;
            left: 90%;
        }

        .section-nucleo-icons .icons-container i:nth-child(15) {
            top: 6%;
            left: 40%;
        }

        .section-images {
            max-height: 670px;
            height: 670px;
        }

        .section-images .hero-images-container,
        .section-images .hero-images-container-1,
        .section-images .hero-images-container-2 {
            margin-top: -38vh;
        }

        .section-images .hero-images-container {
            max-width: 670px;
        }

        .section-images .hero-images-container-1 {
            max-width: 390px;
            position: absolute;
            top: 55%;
            right: 18%;
        }

        .section-images .hero-images-container-2 {
            max-width: 225px;
            position: absolute;
            top: 68%;
            right: 12%;
        }

        [data-background-color="orange"] {
            background-color: #e95e38;
        }

        [data-background-color="black"] {
            background-color: #2c2c2c;
        }

        [data-background-color="blue"] {
            background-color: #2485ca;
        }

        [data-background-color] {
            color: #FFFFFF;
        }

        [data-background-color] .title,
        [data-background-color] .social-description h2,
        [data-background-color] p,
        [data-background-color] p.blockquote,
        [data-background-color] p.blockquote small,
        [data-background-color] h1,
        [data-background-color] h2,
        [data-background-color] h3,
        [data-background-color] h4,
        [data-background-color] h5,
        [data-background-color] h6,
        [data-background-color] a:not(.btn):not(.dropdown-item),
        [data-background-color] .icons-container i {
            color: #FFFFFF;
        }

        [data-background-color] .separator {
            background-color: #FFFFFF;
        }

        [data-background-color] .navbar.bg-white p {
            color: #888;
        }

        [data-background-color] .description,
        [data-background-color] .social-description p {
            color: rgba(255, 255, 255, 0.8);
        }

        [data-background-color] p.blockquote {
            border-color: rgba(255, 255, 255, 0.2);
        }

        [data-background-color] .checkbox label::before,
        [data-background-color] .checkbox label::after,
        [data-background-color] .radio label::before,
        [data-background-color] .radio label::after {
            border-color: rgba(255, 255, 255, 0.2);
        }

        [data-background-color] .checkbox label::after,
        [data-background-color] .checkbox label,
        [data-background-color] .radio label {
            color: #FFFFFF;
        }

        [data-background-color] .checkbox input[type="checkbox"]:disabled+label,
        [data-background-color] .radio input[type="radio"]:disabled+label {
            color: #FFFFFF;
        }

        [data-background-color] .radio input[type="radio"]:not(:disabled):hover+label::after,
        [data-background-color] .radio input[type="radio"]:checked+label::after {
            background-color: #FFFFFF;
            border-color: #FFFFFF;
        }

        [data-background-color] .form-control::-moz-placeholder {
            color: #ebebeb;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        [data-background-color] .form-control:-moz-placeholder {
            color: #ebebeb;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        [data-background-color] .form-control::-webkit-input-placeholder {
            color: #ebebeb;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        [data-background-color] .form-control:-ms-input-placeholder {
            color: #ebebeb;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        [data-background-color] .form-control {
            border-color: rgba(255, 255, 255, 0.5);
            color: #FFFFFF;
        }

        [data-background-color] .form-control:focus {
            border-color: #FFFFFF;
            background-color: transparent;
            color: #FFFFFF;
        }

        [data-background-color] .has-success:after,
        [data-background-color] .has-danger:after {
            color: #FFFFFF;
        }

        [data-background-color] .has-danger .form-control {
            background-color: transparent;
        }

        [data-background-color] .input-group-addon {
            background-color: transparent;
            border-color: rgba(255, 255, 255, 0.5);
            color: #FFFFFF;
        }

        [data-background-color] .input-group-focus .input-group-addon {
            background-color: transparent;
            border-color: #FFFFFF;
            color: #FFFFFF;
        }

        [data-background-color] .form-group.form-group-no-border .form-control,
        [data-background-color] .input-group.form-group-no-border .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            color: #FFFFFF;
        }

        [data-background-color] .form-group.form-group-no-border .form-control:focus,
        [data-background-color] .form-group.form-group-no-border .form-control:active,
        [data-background-color] .form-group.form-group-no-border .form-control:active,
        [data-background-color] .input-group.form-group-no-border .form-control:focus,
        [data-background-color] .input-group.form-group-no-border .form-control:active,
        [data-background-color] .input-group.form-group-no-border .form-control:active {
            background-color: rgba(255, 255, 255, 0.2);
            color: #FFFFFF;
        }

        [data-background-color] .form-group.form-group-no-border .form-control+.input-group-addon,
        [data-background-color] .input-group.form-group-no-border .form-control+.input-group-addon {
            background-color: rgba(255, 255, 255, 0.1);
        }

        [data-background-color] .form-group.form-group-no-border .form-control+.input-group-addon:focus,
        [data-background-color] .form-group.form-group-no-border .form-control+.input-group-addon:active,
        [data-background-color] .form-group.form-group-no-border .form-control+.input-group-addon:active,
        [data-background-color] .input-group.form-group-no-border .form-control+.input-group-addon:focus,
        [data-background-color] .input-group.form-group-no-border .form-control+.input-group-addon:active,
        [data-background-color] .input-group.form-group-no-border .form-control+.input-group-addon:active {
            background-color: rgba(255, 255, 255, 0.2);
            color: #FFFFFF;
        }

        [data-background-color] .form-group.form-group-no-border .form-control:focus+.input-group-addon,
        [data-background-color] .input-group.form-group-no-border .form-control:focus+.input-group-addon {
            background-color: rgba(255, 255, 255, 0.2);
            color: #FFFFFF;
        }

        [data-background-color] .form-group.form-group-no-border .input-group-addon,
        [data-background-color] .input-group.form-group-no-border .input-group-addon {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            color: #FFFFFF;
        }

        [data-background-color] .form-group.form-group-no-border.input-group-focus .input-group-addon,
        [data-background-color] .input-group.form-group-no-border.input-group-focus .input-group-addon {
            background-color: rgba(255, 255, 255, 0.2);
            color: #FFFFFF;
        }

        [data-background-color] .input-group-addon,
        [data-background-color] .form-group.form-group-no-border .input-group-addon,
        [data-background-color] .input-group.form-group-no-border .input-group-addon {
            color: rgba(255, 255, 255, 0.8);
        }

        [data-background-color] .btn.btn-simple {
            background-color: transparent;
            border-color: rgba(255, 255, 255, 0.5);
            color: #FFFFFF;
        }

        [data-background-color] .btn.btn-simple:hover,
        [data-background-color] .btn.btn-simple:hover,
        [data-background-color] .btn.btn-simple:focus,
        [data-background-color] .btn.btn-simple:active {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        [data-background-color] .nav-tabs>.nav-item>.nav-link i.now-ui-icons {
            color: #FFFFFF;
        }

        [data-background-color].section-nucleo-icons .icons-container i:nth-child(6) {
            color: #FFFFFF;
        }

        @media screen and (max-width: 991px) {
            .sidebar-collapse .navbar-collapse {
                position: fixed;
                display: block;
                top: 0;
                height: 100% !important;
                width: 300px;
                right: 0;
                z-index: 1032;
                visibility: visible;
                background-color: #999;
                overflow-y: visible;
                border-top: none;
                text-align: left;
                max-height: none !important;
                -webkit-transform: translate3d(300px, 0, 0);
                -moz-transform: translate3d(300px, 0, 0);
                -o-transform: translate3d(300px, 0, 0);
                -ms-transform: translate3d(300px, 0, 0);
                transform: translate3d(300px, 0, 0);
                -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            }
            .sidebar-collapse .navbar-collapse:before {
                background: #f96332;
                /* For browsers that do not support gradients */
                background: -webkit-linear-gradient(#f96332 0%, #000 80%);
                /* For Safari 5.1 to 6.0 */
                background: -o-linear-gradient(#f96332 0%, #000 80%);
                /* For Opera 11.1 to 12.0 */
                background: -moz-linear-gradient(#f96332 0%, #000 80%);
                /* For Firefox 3.6 to 15 */
                background: linear-gradient(#f96332 0%, #000 80%);
                /* Standard syntax (must be last) */
                opacity: 0.76;
                filter: alpha(opacity=76);
                display: block;
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                z-index: -1;
            }
            .sidebar-collapse .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link {
                margin: 0 1rem;
                margin-top: 0.3125rem;
            }
            .sidebar-collapse .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link:not(.btn) {
                color: #FFFFFF;
            }
            .sidebar-collapse .navbar-collapse .dropdown-menu .dropdown-item {
                color: #FFFFFF;
            }
            .sidebar-collapse .navbar .navbar-nav {
                margin-top: 53px;
            }
            .sidebar-collapse .navbar .navbar-nav .nav-link {
                padding-top: 0.75rem;
                padding-bottom: .75rem;
            }
            .sidebar-collapse .navbar .navbar-nav.navbar-logo {
                top: 0;
                height: 53px;
            }
            .sidebar-collapse .navbar .dropdown.show .dropdown-menu,
            .sidebar-collapse .navbar .dropdown .dropdown-menu {
                background-color: transparent;
                border: 0;
                transition: none;
                -webkit-box-shadow: none;
                box-shadow: none;
                width: auto;
                margin: 0 1rem;
                margin-bottom: 15px;
                padding-top: 0;
                height: 150px;
                overflow-y: scroll;
            }
            .sidebar-collapse .navbar .dropdown.show .dropdown-menu:before,
            .sidebar-collapse .navbar .dropdown .dropdown-menu:before {
                display: none;
            }
            .sidebar-collapse .navbar .dropdown .dropdown-item {
                padding-left: 2.5rem;
            }
            .sidebar-collapse .navbar .dropdown .dropdown-menu {
                display: none;
            }
            .sidebar-collapse .navbar .dropdown.show .dropdown-menu {
                display: block;
            }
            .sidebar-collapse .navbar .dropdown-menu .dropdown-item:focus,
            .sidebar-collapse .navbar .dropdown-menu .dropdown-item:hover {
                color: #FFFFFF;
            }
            .sidebar-collapse .navbar .navbar-translate {
                width: 100%;
                position: relative;
                display: flex;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
                -ms-flex-align: center;
                align-items: center;
                -webkit-transform: translate3d(0px, 0, 0);
                -moz-transform: translate3d(0px, 0, 0);
                -o-transform: translate3d(0px, 0, 0);
                -ms-transform: translate3d(0px, 0, 0);
                transform: translate3d(0px, 0, 0);
                -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            }
            .sidebar-collapse .navbar .navbar-toggler-bar {
                display: block;
                position: relative;
                width: 22px;
                height: 1px;
                border-radius: 1px;
                background: #FFFFFF;
            }
            .sidebar-collapse .navbar .navbar-toggler-bar+.navbar-toggler-bar {
                margin-top: 7px;
            }
            .sidebar-collapse .navbar .navbar-toggler-bar.bar2 {
                width: 17px;
                transition: width .2s linear;
            }
            .sidebar-collapse .navbar.bg-white:not(.navbar-transparent) .navbar-toggler-bar {
                background: #888;
            }
            .sidebar-collapse .navbar .toggled .navbar-toggler-bar {
                width: 24px;
            }
            .sidebar-collapse .navbar .toggled .navbar-toggler-bar+.navbar-toggler-bar {
                margin-top: 5px;
            }
            .sidebar-collapse .bar1,
            .sidebar-collapse .bar2,
            .sidebar-collapse .bar3 {
                outline: 1px solid transparent;
            }
            .sidebar-collapse .bar1 {
                top: 0px;
                -webkit-animation: topbar-back 500ms linear 0s;
                -moz-animation: topbar-back 500ms linear 0s;
                animation: topbar-back 500ms 0s;
                -webkit-animation-fill-mode: forwards;
                -moz-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
            }
            .sidebar-collapse .bar2 {
                opacity: 1;
            }
            .sidebar-collapse .bar3 {
                bottom: 0px;
                -webkit-animation: bottombar-back 500ms linear 0s;
                -moz-animation: bottombar-back 500ms linear 0s;
                animation: bottombar-back 500ms 0s;
                -webkit-animation-fill-mode: forwards;
                -moz-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
            }
            .sidebar-collapse .toggled .bar1 {
                top: 6px;
                -webkit-animation: topbar-x 500ms linear 0s;
                -moz-animation: topbar-x 500ms linear 0s;
                animation: topbar-x 500ms 0s;
                -webkit-animation-fill-mode: forwards;
                -moz-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
            }
            .sidebar-collapse .toggled .bar2 {
                opacity: 0;
            }
            .sidebar-collapse .toggled .bar3 {
                bottom: 6px;
                -webkit-animation: bottombar-x 500ms linear 0s;
                -moz-animation: bottombar-x 500ms linear 0s;
                animation: bottombar-x 500ms 0s;
                -webkit-animation-fill-mode: forwards;
                -moz-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
            }
            @keyframes topbar-x {
                0% {
                    top: 0px;
                    transform: rotate(0deg);
                }
                45% {
                    top: 6px;
                    transform: rotate(145deg);
                }
                75% {
                    transform: rotate(130deg);
                }
                100% {
                    transform: rotate(135deg);
                }
            }
            @-webkit-keyframes topbar-x {
                0% {
                    top: 0px;
                    -webkit-transform: rotate(0deg);
                }
                45% {
                    top: 6px;
                    -webkit-transform: rotate(145deg);
                }
                75% {
                    -webkit-transform: rotate(130deg);
                }
                100% {
                    -webkit-transform: rotate(135deg);
                }
            }
            @-moz-keyframes topbar-x {
                0% {
                    top: 0px;
                    -moz-transform: rotate(0deg);
                }
                45% {
                    top: 6px;
                    -moz-transform: rotate(145deg);
                }
                75% {
                    -moz-transform: rotate(130deg);
                }
                100% {
                    -moz-transform: rotate(135deg);
                }
            }
            @keyframes topbar-back {
                0% {
                    top: 6px;
                    transform: rotate(135deg);
                }
                45% {
                    transform: rotate(-10deg);
                }
                75% {
                    transform: rotate(5deg);
                }
                100% {
                    top: 0px;
                    transform: rotate(0);
                }
            }
            @-webkit-keyframes topbar-back {
                0% {
                    top: 6px;
                    -webkit-transform: rotate(135deg);
                }
                45% {
                    -webkit-transform: rotate(-10deg);
                }
                75% {
                    -webkit-transform: rotate(5deg);
                }
                100% {
                    top: 0px;
                    -webkit-transform: rotate(0);
                }
            }
            @-moz-keyframes topbar-back {
                0% {
                    top: 6px;
                    -moz-transform: rotate(135deg);
                }
                45% {
                    -moz-transform: rotate(-10deg);
                }
                75% {
                    -moz-transform: rotate(5deg);
                }
                100% {
                    top: 0px;
                    -moz-transform: rotate(0);
                }
            }
            @keyframes bottombar-x {
                0% {
                    bottom: 0px;
                    transform: rotate(0deg);
                }
                45% {
                    bottom: 6px;
                    transform: rotate(-145deg);
                }
                75% {
                    transform: rotate(-130deg);
                }
                100% {
                    transform: rotate(-135deg);
                }
            }
            @-webkit-keyframes bottombar-x {
                0% {
                    bottom: 0px;
                    -webkit-transform: rotate(0deg);
                }
                45% {
                    bottom: 6px;
                    -webkit-transform: rotate(-145deg);
                }
                75% {
                    -webkit-transform: rotate(-130deg);
                }
                100% {
                    -webkit-transform: rotate(-135deg);
                }
            }
            @-moz-keyframes bottombar-x {
                0% {
                    bottom: 0px;
                    -moz-transform: rotate(0deg);
                }
                45% {
                    bottom: 6px;
                    -moz-transform: rotate(-145deg);
                }
                75% {
                    -moz-transform: rotate(-130deg);
                }
                100% {
                    -moz-transform: rotate(-135deg);
                }
            }
            @keyframes bottombar-back {
                0% {
                    bottom: 6px;
                    transform: rotate(-135deg);
                }
                45% {
                    transform: rotate(10deg);
                }
                75% {
                    transform: rotate(-5deg);
                }
                100% {
                    bottom: 0px;
                    transform: rotate(0);
                }
            }
            @-webkit-keyframes bottombar-back {
                0% {
                    bottom: 6px;
                    -webkit-transform: rotate(-135deg);
                }
                45% {
                    -webkit-transform: rotate(10deg);
                }
                75% {
                    -webkit-transform: rotate(-5deg);
                }
                100% {
                    bottom: 0px;
                    -webkit-transform: rotate(0);
                }
            }
            @-moz-keyframes bottombar-back {
                0% {
                    bottom: 6px;
                    -moz-transform: rotate(-135deg);
                }
                45% {
                    -moz-transform: rotate(10deg);
                }
                75% {
                    -moz-transform: rotate(-5deg);
                }
                100% {
                    bottom: 0px;
                    -moz-transform: rotate(0);
                }
            }
            @-webkit-keyframes fadeIn {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            @-moz-keyframes fadeIn {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes fadeIn {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            .sidebar-collapse [class*="navbar-expand-"] .navbar-collapse {
                width: 300px;
            }
            .sidebar-collapse .wrapper {
                -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            }
            .sidebar-collapse #bodyClick {
                height: 100%;
                width: 100%;
                position: fixed;
                opacity: 1;
                top: 0;
                left: auto;
                right: 300px;
                content: "";
                z-index: 9999;
                overflow-x: hidden;
                background-color: transparent;
                -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            }
            .sidebar-collapse.menu-on-left .navbar-collapse {
                right: auto;
                left: 0;
                -webkit-transform: translate3d(-300px, 0, 0);
                -moz-transform: translate3d(-300px, 0, 0);
                -o-transform: translate3d(-300px, 0, 0);
                -ms-transform: translate3d(-300px, 0, 0);
                transform: translate3d(-300px, 0, 0);
            }
            .nav-open .sidebar-collapse .navbar-collapse {
                -webkit-transform: translate3d(0px, 0, 0);
                -moz-transform: translate3d(0px, 0, 0);
                -o-transform: translate3d(0px, 0, 0);
                -ms-transform: translate3d(0px, 0, 0);
                transform: translate3d(0px, 0, 0);
            }
            .nav-open .sidebar-collapse .wrapper {
                -webkit-transform: translate3d(-150px, 0, 0);
                -moz-transform: translate3d(-150px, 0, 0);
                -o-transform: translate3d(-150px, 0, 0);
                -ms-transform: translate3d(-150px, 0, 0);
                transform: translate3d(-150px, 0, 0);
            }
            .nav-open .sidebar-collapse .navbar-translate {
                -webkit-transform: translate3d(-300px, 0, 0);
                -moz-transform: translate3d(-300px, 0, 0);
                -o-transform: translate3d(-300px, 0, 0);
                -ms-transform: translate3d(-300px, 0, 0);
                transform: translate3d(-300px, 0, 0);
            }
            .nav-open .sidebar-collapse.menu-on-left .navbar-collapse {
                -webkit-transform: translate3d(0px, 0, 0);
                -moz-transform: translate3d(0px, 0, 0);
                -o-transform: translate3d(0px, 0, 0);
                -ms-transform: translate3d(0px, 0, 0);
                transform: translate3d(0px, 0, 0);
            }
            .nav-open .sidebar-collapse.menu-on-left .navbar-translate {
                -webkit-transform: translate3d(300px, 0, 0);
                -moz-transform: translate3d(300px, 0, 0);
                -o-transform: translate3d(300px, 0, 0);
                -ms-transform: translate3d(300px, 0, 0);
                transform: translate3d(300px, 0, 0);
            }
            .nav-open .sidebar-collapse.menu-on-left .wrapper {
                -webkit-transform: translate3d(150px, 0, 0);
                -moz-transform: translate3d(150px, 0, 0);
                -o-transform: translate3d(150px, 0, 0);
                -ms-transform: translate3d(150px, 0, 0);
                transform: translate3d(150px, 0, 0);
            }
            .nav-open .sidebar-collapse.menu-on-left #bodyClick {
                right: auto;
                left: 300px;
            }
            .bootstrap-collapse .navbar .navbar-collapse {
                background: none !important;
            }
            .bootstrap-collapse .navbar .navbar-nav {
                margin-top: 53px;
            }
            .bootstrap-collapse .navbar .navbar-nav .nav-link {
                padding-top: 0.75rem;
                padding-bottom: .75rem;
            }
            .bootstrap-collapse .navbar .navbar-nav.navbar-logo {
                top: 0;
                height: 53px;
            }
            .bootstrap-collapse .navbar .dropdown.show .dropdown-menu,
            .bootstrap-collapse .navbar .dropdown .dropdown-menu {
                background-color: transparent;
                border: 0;
                transition: none;
                -webkit-box-shadow: none;
                box-shadow: none;
                width: auto;
                margin: 0 1rem;
                margin-bottom: 15px;
                padding-top: 0;
                height: 150px;
                overflow-y: scroll;
            }
            .bootstrap-collapse .navbar .dropdown.show .dropdown-menu:before,
            .bootstrap-collapse .navbar .dropdown .dropdown-menu:before {
                display: none;
            }
            .bootstrap-collapse .navbar .dropdown .dropdown-item {
                padding-left: 2.5rem;
            }
            .bootstrap-collapse .navbar .dropdown .dropdown-menu {
                display: none;
            }
            .bootstrap-collapse .navbar .dropdown.show .dropdown-menu {
                display: block;
            }
            .bootstrap-collapse .navbar .dropdown-menu .dropdown-item:focus,
            .bootstrap-collapse .navbar .dropdown-menu .dropdown-item:hover {
                color: #FFFFFF;
            }
            .bootstrap-collapse .navbar .navbar-translate {
                width: 100%;
                position: relative;
                display: flex;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
                -ms-flex-align: center;
                align-items: center;
                -webkit-transform: translate3d(0px, 0, 0);
                -moz-transform: translate3d(0px, 0, 0);
                -o-transform: translate3d(0px, 0, 0);
                -ms-transform: translate3d(0px, 0, 0);
                transform: translate3d(0px, 0, 0);
                -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            }
            .bootstrap-collapse .navbar .navbar-toggler-bar {
                display: block;
                position: relative;
                width: 22px;
                height: 1px;
                border-radius: 1px;
                background: #FFFFFF;
            }
            .bootstrap-collapse .navbar .navbar-toggler-bar+.navbar-toggler-bar {
                margin-top: 7px;
            }
            .bootstrap-collapse .navbar .navbar-toggler-bar.bar2 {
                width: 17px;
                transition: width .2s linear;
            }
            .bootstrap-collapse .navbar.bg-white:not(.navbar-transparent) .navbar-toggler-bar {
                background: #888;
            }
            .bootstrap-collapse .navbar .toggled .navbar-toggler-bar {
                width: 24px;
            }
            .bootstrap-collapse .navbar .toggled .navbar-toggler-bar+.navbar-toggler-bar {
                margin-top: 5px;
            }
            .bootstrap-collapse .bar1,
            .bootstrap-collapse .bar2,
            .bootstrap-collapse .bar3 {
                outline: 1px solid transparent;
            }
            .bootstrap-collapse .bar1 {
                top: 0px;
                -webkit-animation: topbar-back 500ms linear 0s;
                -moz-animation: topbar-back 500ms linear 0s;
                animation: topbar-back 500ms 0s;
                -webkit-animation-fill-mode: forwards;
                -moz-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
            }
            .bootstrap-collapse .bar2 {
                opacity: 1;
            }
            .bootstrap-collapse .bar3 {
                bottom: 0px;
                -webkit-animation: bottombar-back 500ms linear 0s;
                -moz-animation: bottombar-back 500ms linear 0s;
                animation: bottombar-back 500ms 0s;
                -webkit-animation-fill-mode: forwards;
                -moz-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
            }
            .bootstrap-collapse .toggled .bar1 {
                top: 6px;
                -webkit-animation: topbar-x 500ms linear 0s;
                -moz-animation: topbar-x 500ms linear 0s;
                animation: topbar-x 500ms 0s;
                -webkit-animation-fill-mode: forwards;
                -moz-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
            }
            .bootstrap-collapse .toggled .bar2 {
                opacity: 0;
            }
            .bootstrap-collapse .toggled .bar3 {
                bottom: 6px;
                -webkit-animation: bottombar-x 500ms linear 0s;
                -moz-animation: bottombar-x 500ms linear 0s;
                animation: bottombar-x 500ms 0s;
                -webkit-animation-fill-mode: forwards;
                -moz-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
            }
            @keyframes topbar-x {
                0% {
                    top: 0px;
                    transform: rotate(0deg);
                }
                45% {
                    top: 6px;
                    transform: rotate(145deg);
                }
                75% {
                    transform: rotate(130deg);
                }
                100% {
                    transform: rotate(135deg);
                }
            }
            @-webkit-keyframes topbar-x {
                0% {
                    top: 0px;
                    -webkit-transform: rotate(0deg);
                }
                45% {
                    top: 6px;
                    -webkit-transform: rotate(145deg);
                }
                75% {
                    -webkit-transform: rotate(130deg);
                }
                100% {
                    -webkit-transform: rotate(135deg);
                }
            }
            @-moz-keyframes topbar-x {
                0% {
                    top: 0px;
                    -moz-transform: rotate(0deg);
                }
                45% {
                    top: 6px;
                    -moz-transform: rotate(145deg);
                }
                75% {
                    -moz-transform: rotate(130deg);
                }
                100% {
                    -moz-transform: rotate(135deg);
                }
            }
            @keyframes topbar-back {
                0% {
                    top: 6px;
                    transform: rotate(135deg);
                }
                45% {
                    transform: rotate(-10deg);
                }
                75% {
                    transform: rotate(5deg);
                }
                100% {
                    top: 0px;
                    transform: rotate(0);
                }
            }
            @-webkit-keyframes topbar-back {
                0% {
                    top: 6px;
                    -webkit-transform: rotate(135deg);
                }
                45% {
                    -webkit-transform: rotate(-10deg);
                }
                75% {
                    -webkit-transform: rotate(5deg);
                }
                100% {
                    top: 0px;
                    -webkit-transform: rotate(0);
                }
            }
            @-moz-keyframes topbar-back {
                0% {
                    top: 6px;
                    -moz-transform: rotate(135deg);
                }
                45% {
                    -moz-transform: rotate(-10deg);
                }
                75% {
                    -moz-transform: rotate(5deg);
                }
                100% {
                    top: 0px;
                    -moz-transform: rotate(0);
                }
            }
            @keyframes bottombar-x {
                0% {
                    bottom: 0px;
                    transform: rotate(0deg);
                }
                45% {
                    bottom: 6px;
                    transform: rotate(-145deg);
                }
                75% {
                    transform: rotate(-130deg);
                }
                100% {
                    transform: rotate(-135deg);
                }
            }
            @-webkit-keyframes bottombar-x {
                0% {
                    bottom: 0px;
                    -webkit-transform: rotate(0deg);
                }
                45% {
                    bottom: 6px;
                    -webkit-transform: rotate(-145deg);
                }
                75% {
                    -webkit-transform: rotate(-130deg);
                }
                100% {
                    -webkit-transform: rotate(-135deg);
                }
            }
            @-moz-keyframes bottombar-x {
                0% {
                    bottom: 0px;
                    -moz-transform: rotate(0deg);
                }
                45% {
                    bottom: 6px;
                    -moz-transform: rotate(-145deg);
                }
                75% {
                    -moz-transform: rotate(-130deg);
                }
                100% {
                    -moz-transform: rotate(-135deg);
                }
            }
            @keyframes bottombar-back {
                0% {
                    bottom: 6px;
                    transform: rotate(-135deg);
                }
                45% {
                    transform: rotate(10deg);
                }
                75% {
                    transform: rotate(-5deg);
                }
                100% {
                    bottom: 0px;
                    transform: rotate(0);
                }
            }
            @-webkit-keyframes bottombar-back {
                0% {
                    bottom: 6px;
                    -webkit-transform: rotate(-135deg);
                }
                45% {
                    -webkit-transform: rotate(10deg);
                }
                75% {
                    -webkit-transform: rotate(-5deg);
                }
                100% {
                    bottom: 0px;
                    -webkit-transform: rotate(0);
                }
            }
            @-moz-keyframes bottombar-back {
                0% {
                    bottom: 6px;
                    -moz-transform: rotate(-135deg);
                }
                45% {
                    -moz-transform: rotate(10deg);
                }
                75% {
                    -moz-transform: rotate(-5deg);
                }
                100% {
                    bottom: 0px;
                    -moz-transform: rotate(0);
                }
            }
            @-webkit-keyframes fadeIn {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            @-moz-keyframes fadeIn {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes fadeIn {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            .profile-photo .profile-photo-small {
                margin-left: -2px;
            }
            .button-dropdown {
                display: none;
            }
            .section-nucleo-icons .container .row>[class*="col-"]:first-child {
                text-align: center;
            }
            .footer .copyright {
                text-align: right;
            }
            .section-nucleo-icons .icons-container {
                margin-top: 65px;
            }
            .navbar-nav .nav-link i.fa,
            .navbar-nav .nav-link i.now-ui-icons {
                opacity: .5;
            }
            .section-images {
                height: 500px;
                max-height: 500px;
            }
            .section-images .hero-images-container {
                max-width: 500px;
            }
            .section-images .hero-images-container-1 {
                right: 10%;
                top: 68%;
                max-width: 269px;
            }
            .section-images .hero-images-container-2 {
                right: 5%;
                max-width: 135px;
                top: 93%;
            }
        }

        @media screen and (min-width: 992px) {
            .burger-menu .navbar-collapse {
                position: fixed;
                display: block;
                top: 0;
                height: 100% !important;
                width: 300px;
                right: 0;
                z-index: 1032;
                visibility: visible;
                background-color: #999;
                overflow-y: visible;
                border-top: none;
                text-align: left;
                max-height: none !important;
                -webkit-transform: translate3d(300px, 0, 0);
                -moz-transform: translate3d(300px, 0, 0);
                -o-transform: translate3d(300px, 0, 0);
                -ms-transform: translate3d(300px, 0, 0);
                transform: translate3d(300px, 0, 0);
                -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            }
            .burger-menu .navbar-collapse:before {
                background: #f96332;
                /* For browsers that do not support gradients */
                background: -webkit-linear-gradient(#f96332 0%, #000 80%);
                /* For Safari 5.1 to 6.0 */
                background: -o-linear-gradient(#f96332 0%, #000 80%);
                /* For Opera 11.1 to 12.0 */
                background: -moz-linear-gradient(#f96332 0%, #000 80%);
                /* For Firefox 3.6 to 15 */
                background: linear-gradient(#f96332 0%, #000 80%);
                /* Standard syntax (must be last) */
                opacity: 0.76;
                filter: alpha(opacity=76);
                display: block;
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                z-index: -1;
            }
            .burger-menu .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link {
                margin: 0 1rem;
                margin-top: 0.3125rem;
            }
            .burger-menu .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link:not(.btn) {
                color: #FFFFFF;
            }
            .burger-menu .navbar-collapse .dropdown-menu .dropdown-item {
                color: #FFFFFF;
            }
            .burger-menu .navbar .navbar-nav {
                margin-top: 53px;
            }
            .burger-menu .navbar .navbar-nav .nav-link {
                padding-top: 0.75rem;
                padding-bottom: .75rem;
            }
            .burger-menu .navbar .navbar-nav.navbar-logo {
                top: 0;
                height: 53px;
            }
            .burger-menu .navbar .dropdown.show .dropdown-menu,
            .burger-menu .navbar .dropdown .dropdown-menu {
                background-color: transparent;
                border: 0;
                transition: none;
                -webkit-box-shadow: none;
                box-shadow: none;
                width: auto;
                margin: 0 1rem;
                margin-bottom: 15px;
                padding-top: 0;
                height: 150px;
                overflow-y: scroll;
            }
            .burger-menu .navbar .dropdown.show .dropdown-menu:before,
            .burger-menu .navbar .dropdown .dropdown-menu:before {
                display: none;
            }
            .burger-menu .navbar .dropdown .dropdown-item {
                padding-left: 2.5rem;
            }
            .burger-menu .navbar .dropdown .dropdown-menu {
                display: none;
            }
            .burger-menu .navbar .dropdown.show .dropdown-menu {
                display: block;
            }
            .burger-menu .navbar .dropdown-menu .dropdown-item:focus,
            .burger-menu .navbar .dropdown-menu .dropdown-item:hover {
                color: #FFFFFF;
            }
            .burger-menu .navbar .navbar-translate {
                width: 100%;
                position: relative;
                display: flex;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
                -ms-flex-align: center;
                align-items: center;
                -webkit-transform: translate3d(0px, 0, 0);
                -moz-transform: translate3d(0px, 0, 0);
                -o-transform: translate3d(0px, 0, 0);
                -ms-transform: translate3d(0px, 0, 0);
                transform: translate3d(0px, 0, 0);
                -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            }
            .burger-menu .navbar .navbar-toggler-bar {
                display: block;
                position: relative;
                width: 22px;
                height: 1px;
                border-radius: 1px;
                background: #FFFFFF;
            }
            .burger-menu .navbar .navbar-toggler-bar+.navbar-toggler-bar {
                margin-top: 7px;
            }
            .burger-menu .navbar .navbar-toggler-bar.bar2 {
                width: 17px;
                transition: width .2s linear;
            }
            .burger-menu .navbar.bg-white:not(.navbar-transparent) .navbar-toggler-bar {
                background: #888;
            }
            .burger-menu .navbar .toggled .navbar-toggler-bar {
                width: 24px;
            }
            .burger-menu .navbar .toggled .navbar-toggler-bar+.navbar-toggler-bar {
                margin-top: 5px;
            }
            .burger-menu .bar1,
            .burger-menu .bar2,
            .burger-menu .bar3 {
                outline: 1px solid transparent;
            }
            .burger-menu .bar1 {
                top: 0px;
                -webkit-animation: topbar-back 500ms linear 0s;
                -moz-animation: topbar-back 500ms linear 0s;
                animation: topbar-back 500ms 0s;
                -webkit-animation-fill-mode: forwards;
                -moz-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
            }
            .burger-menu .bar2 {
                opacity: 1;
            }
            .burger-menu .bar3 {
                bottom: 0px;
                -webkit-animation: bottombar-back 500ms linear 0s;
                -moz-animation: bottombar-back 500ms linear 0s;
                animation: bottombar-back 500ms 0s;
                -webkit-animation-fill-mode: forwards;
                -moz-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
            }
            .burger-menu .toggled .bar1 {
                top: 6px;
                -webkit-animation: topbar-x 500ms linear 0s;
                -moz-animation: topbar-x 500ms linear 0s;
                animation: topbar-x 500ms 0s;
                -webkit-animation-fill-mode: forwards;
                -moz-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
            }
            .burger-menu .toggled .bar2 {
                opacity: 0;
            }
            .burger-menu .toggled .bar3 {
                bottom: 6px;
                -webkit-animation: bottombar-x 500ms linear 0s;
                -moz-animation: bottombar-x 500ms linear 0s;
                animation: bottombar-x 500ms 0s;
                -webkit-animation-fill-mode: forwards;
                -moz-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
            }
            @keyframes topbar-x {
                0% {
                    top: 0px;
                    transform: rotate(0deg);
                }
                45% {
                    top: 6px;
                    transform: rotate(145deg);
                }
                75% {
                    transform: rotate(130deg);
                }
                100% {
                    transform: rotate(135deg);
                }
            }
            @-webkit-keyframes topbar-x {
                0% {
                    top: 0px;
                    -webkit-transform: rotate(0deg);
                }
                45% {
                    top: 6px;
                    -webkit-transform: rotate(145deg);
                }
                75% {
                    -webkit-transform: rotate(130deg);
                }
                100% {
                    -webkit-transform: rotate(135deg);
                }
            }
            @-moz-keyframes topbar-x {
                0% {
                    top: 0px;
                    -moz-transform: rotate(0deg);
                }
                45% {
                    top: 6px;
                    -moz-transform: rotate(145deg);
                }
                75% {
                    -moz-transform: rotate(130deg);
                }
                100% {
                    -moz-transform: rotate(135deg);
                }
            }
            @keyframes topbar-back {
                0% {
                    top: 6px;
                    transform: rotate(135deg);
                }
                45% {
                    transform: rotate(-10deg);
                }
                75% {
                    transform: rotate(5deg);
                }
                100% {
                    top: 0px;
                    transform: rotate(0);
                }
            }
            @-webkit-keyframes topbar-back {
                0% {
                    top: 6px;
                    -webkit-transform: rotate(135deg);
                }
                45% {
                    -webkit-transform: rotate(-10deg);
                }
                75% {
                    -webkit-transform: rotate(5deg);
                }
                100% {
                    top: 0px;
                    -webkit-transform: rotate(0);
                }
            }
            @-moz-keyframes topbar-back {
                0% {
                    top: 6px;
                    -moz-transform: rotate(135deg);
                }
                45% {
                    -moz-transform: rotate(-10deg);
                }
                75% {
                    -moz-transform: rotate(5deg);
                }
                100% {
                    top: 0px;
                    -moz-transform: rotate(0);
                }
            }
            @keyframes bottombar-x {
                0% {
                    bottom: 0px;
                    transform: rotate(0deg);
                }
                45% {
                    bottom: 6px;
                    transform: rotate(-145deg);
                }
                75% {
                    transform: rotate(-130deg);
                }
                100% {
                    transform: rotate(-135deg);
                }
            }
            @-webkit-keyframes bottombar-x {
                0% {
                    bottom: 0px;
                    -webkit-transform: rotate(0deg);
                }
                45% {
                    bottom: 6px;
                    -webkit-transform: rotate(-145deg);
                }
                75% {
                    -webkit-transform: rotate(-130deg);
                }
                100% {
                    -webkit-transform: rotate(-135deg);
                }
            }
            @-moz-keyframes bottombar-x {
                0% {
                    bottom: 0px;
                    -moz-transform: rotate(0deg);
                }
                45% {
                    bottom: 6px;
                    -moz-transform: rotate(-145deg);
                }
                75% {
                    -moz-transform: rotate(-130deg);
                }
                100% {
                    -moz-transform: rotate(-135deg);
                }
            }
            @keyframes bottombar-back {
                0% {
                    bottom: 6px;
                    transform: rotate(-135deg);
                }
                45% {
                    transform: rotate(10deg);
                }
                75% {
                    transform: rotate(-5deg);
                }
                100% {
                    bottom: 0px;
                    transform: rotate(0);
                }
            }
            @-webkit-keyframes bottombar-back {
                0% {
                    bottom: 6px;
                    -webkit-transform: rotate(-135deg);
                }
                45% {
                    -webkit-transform: rotate(10deg);
                }
                75% {
                    -webkit-transform: rotate(-5deg);
                }
                100% {
                    bottom: 0px;
                    -webkit-transform: rotate(0);
                }
            }
            @-moz-keyframes bottombar-back {
                0% {
                    bottom: 6px;
                    -moz-transform: rotate(-135deg);
                }
                45% {
                    -moz-transform: rotate(10deg);
                }
                75% {
                    -moz-transform: rotate(-5deg);
                }
                100% {
                    bottom: 0px;
                    -moz-transform: rotate(0);
                }
            }
            @-webkit-keyframes fadeIn {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            @-moz-keyframes fadeIn {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes fadeIn {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            .burger-menu [class*="navbar-expand-"] .navbar-collapse {
                width: 300px;
            }
            .burger-menu .wrapper {
                -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            }
            .burger-menu #bodyClick {
                height: 100%;
                width: 100%;
                position: fixed;
                opacity: 1;
                top: 0;
                left: auto;
                right: 300px;
                content: "";
                z-index: 9999;
                overflow-x: hidden;
                background-color: transparent;
                -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
                transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            }
            .nav-open .burger-menu .navbar-collapse {
                -webkit-transform: translate3d(0px, 0, 0);
                -moz-transform: translate3d(0px, 0, 0);
                -o-transform: translate3d(0px, 0, 0);
                -ms-transform: translate3d(0px, 0, 0);
                transform: translate3d(0px, 0, 0);
            }
            .burger-menu .navbar-collapse {
                display: block !important;
            }
            .burger-menu .navbar-collapse .navbar-nav {
                margin-top: 53px;
                height: 100%;
                z-index: 2;
                position: relative;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .burger-menu .navbar-collapse .navbar-nav .nav-item {
                margin: 0;
            }
            .burger-menu.menu-on-left .navbar-collapse {
                right: auto;
                left: 0;
                -webkit-transform: translate3d(-300px, 0, 0);
                -moz-transform: translate3d(-300px, 0, 0);
                -o-transform: translate3d(-300px, 0, 0);
                -ms-transform: translate3d(-300px, 0, 0);
                transform: translate3d(-300px, 0, 0);
            }
            .burger-menu [class*="navbar-expand-"] .navbar-nav .dropdown-menu {
                position: static;
                float: none;
            }
            .burger-menu [class*="navbar-expand-"] .navbar-toggler {
                display: inline-block;
            }
            .burger-menu .section-navbars .navbar-collapse {
                display: none !important;
            }
            .nav-open .burger-menu.menu-on-left .navbar .navbar-translate {
                -webkit-transform: translate3d(300px, 0, 0);
                -moz-transform: translate3d(300px, 0, 0);
                -o-transform: translate3d(300px, 0, 0);
                -ms-transform: translate3d(300px, 0, 0);
                transform: translate3d(300px, 0, 0);
            }
            .nav-open .burger-menu .navbar .navbar-translate {
                -webkit-transform: translate3d(-300px, 0, 0);
                -moz-transform: translate3d(-300px, 0, 0);
                -o-transform: translate3d(-300px, 0, 0);
                -ms-transform: translate3d(-300px, 0, 0);
                transform: translate3d(-300px, 0, 0);
            }
            .nav-open .burger-menu.menu-on-left .navbar-collapse {
                -webkit-transform: translate3d(0px, 0, 0);
                -moz-transform: translate3d(0px, 0, 0);
                -o-transform: translate3d(0px, 0, 0);
                -ms-transform: translate3d(0px, 0, 0);
                transform: translate3d(0px, 0, 0);
            }
            .nav-open .burger-menu.menu-on-left #bodyClick {
                right: auto;
                left: 300px;
            }
            .burger-menu.menu-on-left .navbar-brand {
                float: right;
                margin-right: 0;
                margin-left: 1rem;
            }
            .navbar-nav .nav-link.profile-photo {
                padding: 0;
                margin: 7px 0.7rem;
            }
            .navbar-nav .nav-link.btn:not(.btn-sm) {
                margin: 0;
            }
            .navbar-nav .nav-item:not(:last-child) {
                margin-right: 5px;
            }
            .section-nucleo-icons .icons-container {
                margin: 0 0 0 auto;
            }
            .dropdown-menu .dropdown-item {
                color: inherit;
            }
            .footer .copyright {
                float: right;
            }
        }

        @media screen and (min-width: 768px) {
            .image-container.image-right {
                top: 80px;
                margin-left: -100px;
                margin-bottom: 130px;
            }
            .image-container.image-left {
                margin-right: -100px;
            }
        }

        @media screen and (max-width: 768px) {
            .image-container.image-left {
                margin-bottom: 220px;
            }
            .image-container.image-left p.blockquote {
                margin: 0 auto;
                position: relative;
                right: 0;
            }
            .nav-tabs {
                display: inline-block;
                width: 100%;
                padding-left: 100px;
                padding-right: 100px;
                text-align: center;
            }
            .nav-tabs .nav-item>.nav-link {
                margin-bottom: 5px;
            }
            .landing-page .section-story-overview .image-container:nth-child(2) {
                margin-left: 0;
                margin-bottom: 30px;
            }
        }

        @media screen and (max-width: 576px) {
            .navbar[class*='navbar-expand-'] .container {
                margin-left: 0;
                margin-right: 0;
            }
            .footer .copyright {
                text-align: center;
            }
            .section-nucleo-icons .icons-container i {
                font-size: 30px;
            }
            .section-nucleo-icons .icons-container i:nth-child(6) {
                font-size: 48px;
            }
            .page-header .container h6.category-absolute {
                width: 90%;
            }
        }

        @media screen and (min-width: 991px) and (max-width: 1200px) {
            .section-images .hero-images-container-1 {
                right: 9%;
                max-width: 370px;
            }
            .section-images .hero-images-container-2 {
                right: 2%;
                max-width: 216px;
            }
        }

        @media screen and (max-width: 768px) {
            .section-images {
                height: 300px;
                max-height: 300px;
            }
            .section-images .hero-images-container {
                max-width: 380px;
            }
            .section-images .hero-images-container-1 {
                right: 7%;
                top: 87%;
                max-width: 210px;
            }
            .section-images .hero-images-container-2 {
                right: 1%;
                max-width: 133px;
                top: 99%;
            }
        }

        @media screen and (max-width: 517px) {
            .alert .alert-icon {
                margin-top: 10px;
            }
        }

        @media screen and (min-width: 1200px) {
            .section-images .hero-images-container-1 {
                top: 51%;
                right: 21%;
            }
            .section-images .hero-images-container-2 {
                top: 66%;
                right: 14%;
            }
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: portrait) {
            .section-images .hero-images-container,
            .section-images .hero-images-container-1,
            .section-images .hero-images-container-2 {
                margin-top: -15vh;
                margin-left: 80px;
            }
            .section-images .hero-images-container {
                max-width: 300px;
            }
            .section-images .hero-images-container-1 {
                right: 28%;
                top: 40%;
            }
            .section-images .hero-images-container-2 {
                right: 21%;
                top: 55%;
            }
            .index-page .category-absolute {
                top: 90vh;
            }
        }

        @media screen and (max-width: 580px) {
            .alert button.close {
                position: absolute;
                right: 11px;
                top: 50%;
                transform: translateY(-50%);
            }
        }

        header {
            position: fixed;
            top: 20px;
            left: 0cm;
            right: 0cm;
            height: 3cm;
            margin-left: 2.02cm;
            margin-bottom: 8px;
        }

        @page {
            margin: 0cm 0cm;
        }

        body {
            margin-top: 3cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }


        /*# sourceMappingURL=bootstrap.min.css.map */
    </style>
</head>

<body>
    <header>
        <img src="{{ asset('img/logo.svg') }}" style="width: 120px; height:100px;"/>
        
    </header>

    <main>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Matricula</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($catraca as $c)
                <tr>
                    <td>{{ $c->NOME }} </td>
                    <td>{{ $c->DEPARTAMENTO }} </td>
                    <td>{{ $c->MATRICULA }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <main>
</body>

</html>