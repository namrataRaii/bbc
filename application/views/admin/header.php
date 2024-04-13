<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | BBC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="IIED" name="description" />
    <meta content="IIED" name="author" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css" integrity="sha512-PlmS4kms+fh6ewjUlXryYw0t4gfyUBrab9UB0vqOojV26QKvUT9FqBJTRReoIZ7fO8p0W/U9WFSI4MAdI1Zm+A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- App favicon -->
    <link href="<?= base_url('assets') ?>/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css" integrity="sha512-Qg72y9f1a3aVc1FVnjq5YURLOOG8fDKQjMnhxYaZgBz4nIVjpVOBUtuMMMqkZPS1FlVrzzEBXq2sM6Qp1zen/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Responsive datatable examples -->
    <link href="<?= base_url('assets') ?>/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/css') ?>/style.css">

    <style>
        .page-title-box {
            padding-bottom: $grid-gutter-width;

            .breadcrumb {
                background-color: transparent;
                padding: 0;
            }

            h4 {
                font-size: 15px;
                text-transform: uppercase;
                font-weight: 600;
            }
        }

        .topnav {
            background: var(--#{$prefix}topnav-bg);
            padding: 0 calc(#{$grid-gutter-width} / 2);
            box-shadow: $box-shadow;
            margin-top: $header-height;
            position: fixed;
            left: 0;
            right: 0;
            z-index: 100;

            .topnav-menu {
                margin: 0;
                padding: 0;
            }

            .navbar-nav {

                .nav-link {
                    font-size: 15px;
                    position: relative;
                    padding: 1rem 1.3rem;
                    color: $menu-item-color;
                    font-family: $font-family-secondary;

                    i {
                        font-size: 15px;
                        vertical-align: middle;
                        display: inline-block;
                    }

                    &:focus,
                    &:hover {
                        color: $menu-item-active-color;
                        background-color: transparent;
                    }
                }

                .dropdown-item {
                    color: $menu-item-color;

                    &.active,
                    &:hover {
                        color: $menu-item-active-color;
                    }
                }

                .nav-item {
                    .nav-link.active {
                        color: $menu-item-active-color;
                    }
                }

                .dropdown {
                    &.active {
                        >a {
                            color: $menu-item-active-color;
                            background-color: transparent;
                        }
                    }
                }
            }
        }

        @include media-breakpoint-up(xl) {

            body[data-layout="horizontal"] {

                .container-fluid,
                .navbar-header {
                    max-width: 85%;
                }
            }
        }

        @include media-breakpoint-up(lg) {
            .topnav {
                .navbar-nav {
                    .nav-item {
                        &:first-of-type {
                            .nav-link {
                                padding-left: 0;
                            }
                        }
                    }
                }

                .dropdown-item {
                    padding: .5rem 1.5rem;
                    min-width: 180px;
                }

                .dropdown {
                    &.mega-dropdown {

                        // position: static;
                        .mega-dropdown-menu {
                            left: 0px;
                            right: auto;
                        }
                    }

                    .dropdown-menu {
                        margin-top: 0;
                        border-radius: 0 0 $dropdown-border-radius $dropdown-border-radius;

                        .arrow-down {
                            &::after {
                                right: 15px;
                                transform: rotate(-135deg) translateY(-50%);
                                position: absolute;
                            }
                        }

                        .dropdown {
                            .dropdown-menu {
                                position: absolute;
                                top: 0 !important;
                                left: 100%;
                                display: none
                            }
                        }
                    }

                    &:hover {
                        >.dropdown-menu {
                            display: block;
                        }
                    }
                }

                .dropdown:hover>.dropdown-menu>.dropdown:hover>.dropdown-menu {
                    display: block
                }
            }

            .navbar-toggle {
                display: none;
            }
        }

        .arrow-down {
            display: inline-block;

            &:after {
                border-color: initial;
                border-style: solid;
                border-width: 0 0 1px 1px;
                content: "";
                height: .4em;
                display: inline-block;
                right: 5px;
                top: 50%;
                margin-left: 10px;
                transform: rotate(-45deg) translateY(-50%);
                transform-origin: top;
                transition: all .3s ease-out;
                width: .4em;
            }
        }


        @include media-breakpoint-down(xl) {
            .topnav-menu {
                .navbar-nav {
                    li {
                        &:last-of-type {
                            .dropdown {
                                .dropdown-menu {
                                    right: 100%;
                                    left: auto;
                                }
                            }
                        }
                    }
                }
            }
        }

        @include media-breakpoint-down(lg) {

            .navbar-brand-box {
                .logo-dark {
                    display: $display-block;

                    span.logo-sm {
                        display: $display-block;
                    }
                }

                .logo-light {
                    display: $display-none;
                }
            }

            .topnav {
                max-height: 360px;
                overflow-y: auto;
                padding: 0;

                .navbar-nav {
                    .nav-link {
                        padding: 0.75rem 1.1rem;
                    }
                }

                .dropdown {
                    .dropdown-menu {
                        background-color: transparent;
                        border: none;
                        box-shadow: none;
                        padding-left: 15px;

                        &.dropdown-mega-menu-xl {
                            width: auto;

                            .row {
                                margin: 0px;
                            }
                        }
                    }

                    .dropdown-item {
                        position: relative;
                        background-color: transparent;

                        &.active,
                        &:active {
                            color: $primary;
                        }
                    }
                }

                .arrow-down {
                    &::after {
                        right: 15px;
                        position: absolute;
                    }
                }
            }
        }


        @include media-breakpoint-up(lg) {

            body[data-layout="horizontal"][data-topbar="light"] {
                .navbar-brand-box {
                    .logo-dark {
                        display: $display-block;
                    }

                    .logo-light {
                        display: $display-none;
                    }
                }

                .topnav {
                    background-color: var(--#{$prefix}header-dark-bg);

                    .navbar-nav {

                        .nav-link {
                            color: rgba($white, 0.6);

                            &:focus,
                            &:hover {
                                color: rgba($white, 0.9);
                            }
                        }

                        >.dropdown {
                            &.active {
                                >a {
                                    color: rgba($white, 0.9) !important;
                                }
                            }
                        }
                    }
                }
            }
        }

        [data-bs-theme="dark"][data-layout="horizontal"][data-topbar="light"] {
            .navbar-brand-box {
                .logo-dark {
                    display: $display-none;
                }

                .logo-light {
                    display: $display-block;
                }
            }
        }

        .metismenu {
            margin: 0;

            li {
                display: block;
                width: 100%;
            }

            .mm-collapse {
                display: none;

                &:not(.mm-show) {
                    display: none;
                }

                &.mm-show {
                    display: block
                }
            }

            .mm-collapsing {
                position: relative;
                height: 0;
                overflow: hidden;
                transition-timing-function: ease;
                transition-duration: .35s;
                transition-property: height, visibility;
            }
        }


        .vertical-menu {
            width: $sidebar-width;
            z-index: 1001;
            background: var(--#{$prefix}sidebar-bg);
            bottom: 0;
            margin-top: 0;
            position: fixed;
            top: $header-height;
            box-shadow: $box-shadow;
        }

        .main-content {
            margin-left: $sidebar-width;
            overflow: hidden;

            .content {
                padding: 0 15px 10px 15px;
                margin-top: $header-height;
            }
        }


        #sidebar-menu {
            padding: 10px 0 30px 0;

            .mm-active {
                >.has-arrow {
                    &:after {
                        transform: rotate(-180deg);
                    }
                }
            }

            .has-arrow {
                &:after {
                    content: "\F0140";
                    font-family: 'Material Design Icons';
                    display: block;
                    float: right;
                    transition: transform .2s;
                    font-size: 1rem;
                }
            }

            ul {
                li {
                    a {
                        display: block;
                        padding: .625rem 1.5rem;
                        color: var(--#{$prefix}sidebar-menu-item-color);
                        position: relative;
                        font-size: 13.3px;
                        transition: all .4s;
                        font-family: $font-family-secondary;
                        font-weight: 500;

                        i {
                            display: inline-block;
                            min-width: 1.5rem;
                            padding-bottom: .125em;
                            font-size: 1.1rem;
                            line-height: 1.40625rem;
                            vertical-align: middle;
                            color: var(--#{$prefix}sidebar-menu-item-icon-color);
                            transition: all .4s;
                            opacity: .75;
                        }

                        &:hover {
                            color: var(--#{$prefix}sidebar-menu-item-hover-color);

                            i {
                                color: var(--#{$prefix}sidebar-menu-item-hover-color);
                            }
                        }
                    }

                    .badge {
                        margin-top: 4px;
                    }

                    ul.sub-menu {
                        padding: 0;

                        li {

                            a {
                                padding: .4rem 1.5rem .4rem 3.2rem;
                                font-size: 13px;
                                color: var(--#{$prefix}sidebar-menu-sub-item-color);
                            }

                            ul.sub-menu {
                                padding: 0;

                                li {
                                    a {
                                        padding: .4rem 1.5rem .4rem 4.2rem;
                                        font-size: 13.5px;
                                    }
                                }
                            }
                        }
                    }
                }

            }
        }

        .menu-title {
            padding: 12px 20px !important;
            letter-spacing: .05em;
            pointer-events: none;
            cursor: default;
            font-size: 11px;
            text-transform: uppercase;
            color: var(--#{$prefix}sidebar-menu-item-icon-color);
            font-weight: $font-weight-semibold;
            font-family: $font-family-secondary;
            opacity: .5;
        }


        .mm-active {
            color: var(--#{$prefix}sidebar-menu-item-active-color) !important;

            >a {
                color: var(--#{$prefix}sidebar-menu-item-active-color) !important;

                i {
                    color: var(--#{$prefix}sidebar-menu-item-active-color) !important;
                }
            }

            >i {
                color: var(--#{$prefix}sidebar-menu-item-active-color) !important;
            }

            .active {
                color: var(--#{$prefix}sidebar-menu-item-active-color) !important;

                i {
                    color: var(--#{$prefix}sidebar-menu-item-active-color) !important;
                }
            }
        }

        @media (max-width: 992px) {
            .vertical-menu {
                display: none;
            }

            .main-content {
                margin-left: 0 !important;
            }

            body.sidebar-enable {
                .vertical-menu {
                    display: block;
                }
            }
        }

        // Enlarge menu
        .vertical-collpsed {

            .main-content {
                margin-left: $sidebar-collapsed-width;
            }

            .navbar-brand-box {
                width: $sidebar-collapsed-width !important;
            }

            .logo {
                span.logo-lg {
                    display: none;
                }

                span.logo-sm {
                    display: block;
                }
            }

            // Side menu
            .vertical-menu {
                position: absolute;
                width: $sidebar-collapsed-width !important;
                z-index: 5;

                .simplebar-mask,
                .simplebar-content-wrapper {
                    overflow: visible !important;
                }

                .simplebar-scrollbar {
                    display: none !important;
                }

                .simplebar-offset {
                    bottom: 0 !important;
                }

                // Sidebar Menu
                #sidebar-menu {

                    .menu-title,
                    .badge,
                    .collapse.in {
                        display: none !important;
                    }

                    .nav.collapse {
                        height: inherit !important;
                    }

                    .has-arrow {
                        &:after {
                            display: none;
                        }
                    }

                    >ul {
                        >li {
                            position: relative;
                            white-space: nowrap;

                            >a {
                                padding: 15px 20px;
                                min-height: 55px;
                                transition: none;

                                &:hover,
                                &:active,
                                &:focus {
                                    color: var(--#{$prefix}sidebar-menu-item-hover-color);
                                }

                                i {
                                    font-size: 20px;
                                    margin-left: 4px;
                                }

                                span {
                                    display: none;
                                    padding-left: 25px;
                                }
                            }

                            &:hover {
                                >a {
                                    position: relative;
                                    width: calc(190px + #{$sidebar-collapsed-width});
                                    color: $primary;
                                    // background-color: darken($sidebar-bg, 4%);
                                    transition: none;

                                    i {
                                        color: $primary;
                                    }

                                    span {
                                        display: inline;
                                    }
                                }

                                >ul {
                                    display: block;
                                    left: $sidebar-collapsed-width;
                                    position: absolute;
                                    width: 190px;
                                    height: auto !important;
                                    box-shadow: 3px 5px 12px -4px rgba(18, 19, 21, 0.1);

                                    ul {
                                        box-shadow: 3px 5px 12px -4px rgba(18, 19, 21, 0.1);
                                    }

                                    a {
                                        box-shadow: none;
                                        padding: 8px 20px;
                                        position: relative;
                                        width: 190px;
                                        z-index: 6;
                                        color: var(--#{$prefix}sidebar-menu-sub-item-color);

                                        &:hover {
                                            color: var(--#{$prefix}sidebar-menu-item-hover-color);
                                        }
                                    }
                                }
                            }
                        }

                        ul {
                            padding: 5px 0;
                            z-index: 9999;
                            display: none;
                            background-color: var(--#{$prefix}sidebar-bg);

                            li {
                                &:hover {
                                    >ul {
                                        display: block;
                                        left: 190px;
                                        height: auto !important;
                                        margin-top: -36px;
                                        position: absolute;
                                        width: 190px;
                                    }
                                }

                                >a {
                                    span.pull-right {
                                        position: absolute;
                                        right: 20px;
                                        top: 12px;
                                        transform: rotate(270deg);
                                    }
                                }
                            }

                            li.active {
                                a {
                                    color: $gray-100;
                                }
                            }
                        }
                    }
                }

            }
        }




        body[data-sidebar="dark"] {
            .vertical-menu {
                background: var(--#{$prefix}sidebar-dark-bg);
            }

            #sidebar-menu {

                ul {
                    li {
                        a {
                            color: var(--#{$prefix}sidebar-dark-menu-item-color);

                            i {
                                color: var(--#{$prefix}sidebar-dark-menu-item-color);
                            }

                            &:hover {
                                color: var(--#{$prefix}sidebar-dark-menu-item-hover-color);

                                i {
                                    color: var(--#{$prefix}sidebar-dark-menu-item-hover-color);
                                    ;
                                }
                            }
                        }

                        ul.sub-menu {
                            li {

                                a {
                                    color: var(--#{$prefix}sidebar-dark-menu-sub-item-color);

                                    &:hover {
                                        color: var(--#{$prefix}sidebar-dark-menu-item-hover-color);
                                        ;
                                    }
                                }
                            }
                        }
                    }
                }
            }

            // Enlarge menu
            &.vertical-collpsed {
                min-height: 1400px;

                // Side menu
                .vertical-menu {

                    // Sidebar Menu
                    #sidebar-menu {

                        >ul {
                            >li {

                                &:hover {
                                    >a {
                                        background-color: var(--#{$prefix}sidebar-dark-bg);
                                        color: var(--#{$prefix}sidebar-dark-menu-item-hover-color);
                                        ;

                                        i {
                                            color: var(--#{$prefix}sidebar-dark-menu-item-hover-color);
                                            ;
                                        }
                                    }

                                    >ul {
                                        a {
                                            color: var(--#{$prefix}sidebar-dark-menu-sub-item-color);

                                            &:hover {
                                                color: var(--#{$prefix}sidebar-menu-item-hover-color);
                                            }
                                        }
                                    }
                                }
                            }

                            ul {
                                background-color: var(--#{$prefix}secondary-bg);
                            }

                        }

                        ul {

                            >li {
                                >a {
                                    &.mm-active {
                                        color:var(--#{$prefix}sidebar-dark-menu-item-active-color) !important;
                                    }
                                }
                            }

                            li {
                                li {

                                    &.mm-active,
                                    &.active {
                                        >a {
                                            color:var(--#{$prefix}sidebar-menu-item-active-color) !important;
                                        }
                                    }

                                    a {

                                        &.mm-active,
                                        &.active {
                                            color: var(--#{$prefix}sidebar-menu-item-active-color) !important;
                                        }


                                    }
                                }
                            }


                        }
                    }


                }
            }

            .mm-active {
                color: $sidebar-dark-menu-item-active-color !important;

                >a {
                    color: $sidebar-dark-menu-item-active-color !important;

                    i {
                        color: $sidebar-dark-menu-item-active-color !important;
                    }
                }

                >i {
                    color: $sidebar-dark-menu-item-active-color !important;
                }

                .active {
                    color: $sidebar-dark-menu-item-active-color !important;

                    i {
                        color: $sidebar-dark-menu-item-active-color !important;
                    }
                }
            }

            .menu-title {
                color: var(--#{$prefix}sidebar-dark-menu-item-color);
            }
        }


        body[data-layout="horizontal"] {
            .main-content {
                margin-left: 0 !important;
            }
        }

        // Compact Sidebar

        body[data-sidebar-size="small"] {
            .navbar-brand-box {
                width: $sidebar-width-sm;

                @media (max-width: 992px) {
                    width: auto;
                }
            }

            .vertical-menu {
                width: $sidebar-width-sm;
                text-align: center;

                .has-arrow:after,
                .badge {
                    display: none !important;
                }
            }

            .main-content {
                margin-left: $sidebar-width-sm;
            }

            .footer {
                left: $sidebar-width-sm;

                @media (max-width: 991px) {
                    left: 0;
                }
            }

            #sidebar-menu {
                ul li {

                    // &.menu-title{
                    //     background-color: lighten($sidebar-dark-bg, 2%);
                    // }
                    a {
                        i {
                            display: block;
                        }
                    }

                    ul.sub-menu {
                        li {
                            a {
                                padding-left: 1.5rem;
                            }

                            ul.sub-menu {
                                li {
                                    a {
                                        padding-left: 1.5rem;
                                    }
                                }
                            }
                        }
                    }
                }
            }

            &.vertical-collpsed {
                .main-content {
                    margin-left: $sidebar-collapsed-width;
                }

                .vertical-menu {
                    #sidebar-menu {
                        text-align: left;

                        >ul {
                            >li {
                                >a {
                                    i {
                                        display: inline-block;
                                    }
                                }
                            }
                        }
                    }
                }

                .footer {
                    left: $sidebar-collapsed-width;
                }
            }
        }

        // Colored Sidebar

        body[data-sidebar="colored"] {
            .vertical-menu {
                background: $primary;
            }

            .navbar-brand-box {
                background-color: $primary;

                .logo-dark {
                    display: none;
                }

                .logo-light {
                    display: block;
                }
            }

            #sidebar-menu {
                ul {
                    li {
                        &.menu-title {
                            color: rgba($white, 0.6);
                        }

                        a {
                            color: rgba($white, 0.6);

                            i {
                                color: rgba($white, 0.6);
                            }

                            &.waves-effect {
                                .waves-ripple {
                                    background: rgba($white, 0.1);
                                }
                            }
                        }

                        ul.sub-menu {
                            li {
                                a {
                                    color: rgba($white, .5);
                                }
                            }
                        }
                    }
                }
            }

            // Enlarge menu
            &.vertical-collpsed {
                .vertical-menu {
                    #sidebar-menu {
                        >ul {
                            >li {
                                &:hover>a {
                                    background-color: lighten($primary, 2%);
                                    color: $white;

                                    i {
                                        color: $white;
                                    }
                                }

                            }
                        }

                        ul {

                            >li {
                                >a {
                                    &.mm-active {
                                        color: $sidebar-dark-menu-item-active-color !important;
                                    }
                                }
                            }

                            li {
                                li {

                                    &.mm-active,
                                    &.active {
                                        >a {
                                            color: var(--#{$prefix}sidebar-menu-item-active-color) !important;
                                        }
                                    }

                                    a {

                                        &.mm-active,
                                        &.active {
                                            color: var(--#{$prefix}sidebar-menu-item-active-color) !important;
                                        }


                                    }
                                }
                            }


                        }
                    }
                }
            }

            .mm-active {
                color: $white !important;

                >a {
                    color: $white !important;

                    i {
                        color: $white !important;
                    }
                }

                >i {
                    color: $white !important;
                }

                .active {
                    color: $white !important;

                    i {
                        color: $white !important;
                    }
                }
            }

            .menu-title {
                color: $white !important;
            }
        }

        [data-simplebar] {
            position: relative;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-content: flex-start;
            align-items: flex-start;
        }

        .simplebar-wrapper {
            overflow: hidden;
            width: inherit;
            height: inherit;
            max-width: inherit;
            max-height: inherit;
        }

        .simplebar-mask {
            direction: inherit;
            position: absolute;
            overflow: hidden;
            padding: 0;
            margin: 0;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            width: auto !important;
            height: auto !important;
            z-index: 0;
        }

        .simplebar-offset {
            direction: inherit !important;
            box-sizing: inherit !important;
            resize: none !important;
            position: absolute;
            top: 0;
            left: 0 !important;
            bottom: 0;
            right: 0 !important;
            padding: 0;
            margin: 0;
            -webkit-overflow-scrolling: touch;
        }

        .simplebar-content-wrapper {
            direction: inherit;
            box-sizing: border-box !important;
            position: relative;
            display: block;
            height: 100%;
            /* Required for horizontal native scrollbar to not appear if parent is taller than natural height */
            width: auto;
            visibility: visible;
            overflow: auto;
            /* Scroll on this element otherwise element can't have a padding applied properly */
            max-width: 100%;
            /* Not required for horizontal scroll to trigger */
            max-height: 100%;
            /* Needed for vertical scroll to trigger */
            scrollbar-width: none;
            padding: 0px !important;
        }

        .simplebar-content-wrapper::-webkit-scrollbar,
        .simplebar-hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .simplebar-content:before,
        .simplebar-content:after {
            content: ' ';
            display: table;
        }

        .simplebar-placeholder {
            max-height: 100%;
            max-width: 100%;
            width: 100%;
            pointer-events: none;
        }

        .simplebar-height-auto-observer-wrapper {
            box-sizing: inherit !important;
            height: 100%;
            width: 100%;
            max-width: 1px;
            position: relative;
            float: left;
            max-height: 1px;
            overflow: hidden;
            z-index: -1;
            padding: 0;
            margin: 0;
            pointer-events: none;
            flex-grow: inherit;
            flex-shrink: 0;
            flex-basis: 0;
        }

        .simplebar-height-auto-observer {
            box-sizing: inherit;
            display: block;
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            height: 1000%;
            width: 1000%;
            min-height: 1px;
            min-width: 1px;
            overflow: hidden;
            pointer-events: none;
            z-index: -1;
        }

        .simplebar-track {
            z-index: 1;
            position: absolute;
            right: 0;
            bottom: 0;
            pointer-events: none;
            overflow: hidden;
        }

        [data-simplebar].simplebar-dragging .simplebar-content {
            pointer-events: none;
            user-select: none;
            -webkit-user-select: none;
        }

        [data-simplebar].simplebar-dragging .simplebar-track {
            pointer-events: all;
        }

        .simplebar-scrollbar {
            position: absolute;
            right: 2px;
            width: 6px;
            min-height: 10px;
        }

        .simplebar-scrollbar:before {
            position: absolute;
            content: '';
            background: #a2adb7;
            border-radius: 7px;
            left: 0;
            right: 0;
            opacity: 0;
            transition: opacity 0.2s linear;
        }

        .simplebar-scrollbar.simplebar-visible:before {
            /* When hovered, remove all transitions from drag handle */
            opacity: 0.5;
            transition: opacity 0s linear;
        }

        .simplebar-track.simplebar-vertical {
            top: 0;
            width: 11px;
        }

        .simplebar-track.simplebar-vertical .simplebar-scrollbar:before {
            top: 2px;
            bottom: 2px;
        }

        .simplebar-track.simplebar-horizontal {
            left: 0;
            height: 11px;
        }

        .simplebar-track.simplebar-horizontal .simplebar-scrollbar:before {
            height: 100%;
            left: 2px;
            right: 2px;
        }

        .simplebar-track.simplebar-horizontal .simplebar-scrollbar {
            right: auto;
            left: 0;
            top: 2px;
            height: 7px;
            min-height: 0;
            min-width: 10px;
            width: auto;
        }

        /* Rtl support */
        [data-simplebar-direction='rtl'] .simplebar-track.simplebar-vertical {
            right: auto;
            left: 0;
        }

        .hs-dummy-scrollbar-size {
            direction: rtl;
            position: fixed;
            opacity: 0;
            visibility: hidden;
            height: 500px;
            width: 500px;
            overflow-y: hidden;
            overflow-x: scroll;
        }

        .simplebar-hide-scrollbar {
            position: fixed;
            left: 0;
            visibility: hidden;
            overflow-y: scroll;
            scrollbar-width: none;
        }

        .custom-scroll {
            height: 100%;
        }

        // stylelint-disable at-rule-no-vendor-prefix, declaration-no-important, selector-no-qualifying-type, property-no-vendor-prefix

        // Reboot
        //
        // Normalization of HTML elements, manually forked from Normalize.css to remove
        // styles targeting irrelevant browsers while applying new styles.
        //
        // Normalize is licensed MIT. https://github.com/necolas/normalize.css


        // Document
        //
        // 1. Change from `box-sizing: content-box` so that `width` is not affected by `padding` or `border`.
        // 2. Change the default font family in all browsers.
        // 3. Correct the line height in all browsers.
        // 4. Prevent adjustments of font size after orientation changes in IE on Windows Phone and in iOS.
        // 5. Change the default tap highlight to be completely transparent in iOS.

        *,
        *::before,
        *::after {
            box-sizing: border-box; // 1
        }

        html {
            font-family: sans-serif; // 2
            line-height: 1.15; // 3
            -webkit-text-size-adjust: 100%; // 4
            -webkit-tap-highlight-color: rgba($black, 0); // 5
        }

        // Shim for "new" HTML5 structural elements to display correctly (IE10, older browsers)
        // TODO: remove in v5
        // stylelint-disable-next-line selector-list-comma-newline-after
        article,
        aside,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block;
        }

        // Body
        //
        // 1. Remove the margin in all browsers.
        // 2. As a best practice, apply a default `background-color`.
        // 3. Set an explicit initial text-align value so that we can later use
        //    the `inherit` value on things like `<th>` elements.

        body {
            margin: 0; // 1
            font-family: $font-family-base;
            @include font-size($font-size-base);
            font-weight: $font-weight-base;
            line-height: $line-height-base;
            color: $body-color;
            text-align: left; // 3
            background-color: $body-bg; // 2
        }

        // Future-proof rule: in browsers that support :focus-visible, suppress the focus outline
        // on elements that programmatically receive focus but wouldn't normally show a visible
        // focus outline. In general, this would mean that the outline is only applied if the
        // interaction that led to the element receiving programmatic focus was a keyboard interaction,
        // or the browser has somehow determined that the user is primarily a keyboard user and/or
        // wants focus outlines to always be presented.
        //
        // See https://developer.mozilla.org/en-US/docs/Web/CSS/:focus-visible
        // and https://developer.paciellogroup.com/blog/2018/03/focus-visible-and-backwards-compatibility/
        [tabindex="-1"]:focus:not(:focus-visible) {
            outline: 0 !important;
        }


        // Content grouping
        //
        // 1. Add the correct box sizing in Firefox.
        // 2. Show the overflow in Edge and IE.

        hr {
            box-sizing: content-box; // 1
            height: 0; // 1
            overflow: visible; // 2
        }


        //
        // Typography
        //

        // Remove top margins from headings
        //
        // By default, `<h1>`-`<h6>` all receive top and bottom margins. We nuke the top
        // margin for easier control within type scales as it avoids margin collapsing.
        // stylelint-disable-next-line selector-list-comma-newline-after
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: $headings-margin-bottom;
        }

        // Reset margins on paragraphs
        //
        // Similarly, the top margin on `<p>`s get reset. However, we also reset the
        // bottom margin to use `rem` units instead of `em`.
        p {
            margin-top: 0;
            margin-bottom: $paragraph-margin-bottom;
        }

        // Abbreviations
        //
        // 1. Duplicate behavior to the data-* attribute for our tooltip plugin
        // 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
        // 3. Add explicit cursor to indicate changed behavior.
        // 4. Remove the bottom border in Firefox 39-.
        // 5. Prevent the text-decoration to be skipped.

        abbr[title],
        abbr[data-original-title] {
            // 1
            text-decoration: underline; // 2
            text-decoration: underline dotted; // 2
            cursor: help; // 3
            border-bottom: 0; // 4
            text-decoration-skip-ink: none; // 5
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
            font-weight: $dt-font-weight;
        }

        dd {
            margin-bottom: .5rem;
            margin-left: 0; // Undo browser default
        }

        blockquote {
            margin: 0 0 1rem;
        }

        b,
        strong {
            font-weight: $font-weight-bolder; // Add the correct font weight in Chrome, Edge, and Safari
        }

        small {
            @include font-size(80%); // Add the correct font size in all browsers
        }

        //
        // Prevent `sub` and `sup` elements from affecting the line height in
        // all browsers.
        //

        sub,
        sup {
            position: relative;
            @include font-size(75%);
            line-height: 0;
            vertical-align: baseline;
        }

        sub {
            bottom: -.25em;
        }

        sup {
            top: -.5em;
        }


        //
        // Links
        //

        a {
            color: $link-color;
            text-decoration: $link-decoration;
            background-color: transparent; // Remove the gray background on active links in IE 10.

            @include hover() {
                color: $link-hover-color;
                text-decoration: $link-hover-decoration;
            }
        }

        // And undo these styles for placeholder links/named anchors (without href).
        // It would be more straightforward to just use a[href] in previous block, but that
        // causes specificity issues in many other styles that are too complex to fix.
        // See https://github.com/twbs/bootstrap/issues/19402

        a:not([href]) {
            color: inherit;
            text-decoration: none;

            @include hover() {
                color: inherit;
                text-decoration: none;
            }
        }


        //
        // Code
        //

        pre,
        code,
        kbd,
        samp {
            font-family: $font-family-monospace;
            @include font-size(1em); // Correct the odd `em` font sizing in all browsers.
        }

        pre {
            // Remove browser default top margin
            margin-top: 0;
            // Reset browser default of `1em` to use `rem`s
            margin-bottom: 1rem;
            // Don't allow content to break outside
            overflow: auto;
        }


        //
        // Figures
        //

        figure {
            // Apply a consistent margin strategy (matches our type styles).
            margin: 0 0 1rem;
        }


        //
        // Images and content
        //

        img {
            vertical-align: middle;
            border-style: none; // Remove the border on images inside links in IE 10-.
        }

        svg {
            // Workaround for the SVG overflow bug in IE10/11 is still required.
            // See https://github.com/twbs/bootstrap/issues/26878
            overflow: hidden;
            vertical-align: middle;
        }


        //
        // Tables
        //

        table {
            border-collapse: collapse; // Prevent double borders
        }

        caption {
            padding-top: $table-cell-padding;
            padding-bottom: $table-cell-padding;
            color: $table-caption-color;
            text-align: left;
            caption-side: bottom;
        }

        th {
            // Matches default `<td>` alignment by inheriting from the `<body>`, or the
            // closest parent with a set `text-align`.
            text-align: inherit;
        }


        //
        // Forms
        //

        label {
            // Allow labels to use `margin` for spacing.
            display: inline-block;
            margin-bottom: $label-margin-bottom;
        }

        // Remove the default `border-radius` that macOS Chrome adds.
        //
        // Details at https://github.com/twbs/bootstrap/issues/24093
        button {
            // stylelint-disable-next-line property-blacklist
            border-radius: 0;
        }

        // Work around a Firefox/IE bug where the transparent `button` background
        // results in a loss of the default `button` focus styles.
        //
        // Credit: https://github.com/suitcss/base/
        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }

        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0; // Remove the margin in Firefox and Safari
            font-family: inherit;
            @include font-size(inherit);
            line-height: inherit;
        }

        button,
        input {
            overflow: visible; // Show the overflow in Edge
        }

        button,
        select {
            text-transform: none; // Remove the inheritance of text transform in Firefox
        }

        // Remove the inheritance of word-wrap in Safari.
        //
        // Details at https://github.com/twbs/bootstrap/issues/24990
        select {
            word-wrap: normal;
        }


        // 1. Prevent a WebKit bug where (2) destroys native `audio` and `video`
        //    controls in Android 4.
        // 2. Correct the inability to style clickable types in iOS and Safari.
        button,
        [type="button"],
        // 1
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button; // 2
        }

        // Opinionated: add "hand" cursor to non-disabled button elements.
        @if $enable-pointer-cursor-for-buttons {

            button,
            [type="button"],
            [type="reset"],
            [type="submit"] {
                &:not(:disabled) {
                    cursor: pointer;
                }
            }
        }

        // Remove inner border and padding from Firefox, but don't restore the outline like Normalize.
        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        input[type="radio"],
        input[type="checkbox"] {
            box-sizing: border-box; // 1. Add the correct box sizing in IE 10-
            padding: 0; // 2. Remove the padding in IE 10-
        }


        input[type="date"],
        input[type="time"],
        input[type="datetime-local"],
        input[type="month"] {
            // Remove the default appearance of temporal inputs to avoid a Mobile Safari
            // bug where setting a custom line-height prevents text from being vertically
            // centered within the input.
            // See https://bugs.webkit.org/show_bug.cgi?id=139848
            // and https://github.com/twbs/bootstrap/issues/11266
            -webkit-appearance: listbox;
        }

        textarea {
            overflow: auto; // Remove the default vertical scrollbar in IE.
            // Textareas should really only resize vertically so they don't break their (horizontal) containers.
            resize: vertical;
        }

        fieldset {
            // Browsers set a default `min-width: min-content;` on fieldsets,
            // unlike e.g. `<div>`s, which have `min-width: 0;` by default.
            // So we reset that to ensure fieldsets behave more like a standard block element.
            // See https://github.com/twbs/bootstrap/issues/12359
            // and https://html.spec.whatwg.org/multipage/#the-fieldset-and-legend-elements
            min-width: 0;
            // Reset the default outline behavior of fieldsets so they don't affect page layout.
            padding: 0;
            margin: 0;
            border: 0;
        }

        // 1. Correct the text wrapping in Edge and IE.
        // 2. Correct the color inheritance from `fieldset` elements in IE.
        legend {
            display: block;
            width: 100%;
            max-width: 100%; // 1
            padding: 0;
            margin-bottom: .5rem;
            @include font-size(1.5rem);
            line-height: inherit;
            color: inherit; // 2
            white-space: normal; // 1
        }

        progress {
            vertical-align: baseline; // Add the correct vertical alignment in Chrome, Firefox, and Opera.
        }

        // Correct the cursor style of increment and decrement buttons in Chrome.
        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            // This overrides the extra rounded corners on search inputs in iOS so that our
            // `.form-control` class can properly style them. Note that this cannot simply
            // be added to `.form-control` as it's not specific enough. For details, see
            // https://github.com/twbs/bootstrap/issues/11586.
            outline-offset: -2px; // 2. Correct the outline style in Safari.
            -webkit-appearance: none;
        }

        //
        // Remove the inner padding in Chrome and Safari on macOS.
        //

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        //
        // 1. Correct the inability to style clickable types in iOS and Safari.
        // 2. Change font properties to `inherit` in Safari.
        //

        ::-webkit-file-upload-button {
            font: inherit; // 2
            -webkit-appearance: button; // 1
        }

        //
        // Correct element displays
        //

        output {
            display: inline-block;
        }

        summary {
            display: list-item; // Add the correct display in all browsers
            cursor: pointer;
        }

        template {
            display: none; // Add the correct display in IE
        }

        // Always hide an element with the `hidden` HTML attribute (from PureCSS).
        // Needed for proper display in IE 10-.
        [hidden] {
            display: none !important;
        }

        //
        // _helper.scss
        //

        .font-size-11 {
            font-size: 11px !important;
        }

        .font-size-12 {
            font-size: 12px !important;
        }

        .font-size-13 {
            font-size: 13px !important;
        }

        .font-size-14 {
            font-size: 14px !important;
        }

        .font-size-15 {
            font-size: 15px !important;
        }

        .font-size-16 {
            font-size: 16px !important;
        }

        .font-size-17 {
            font-size: 17px !important;
        }

        .font-size-18 {
            font-size: 18px !important;
        }

        .font-size-20 {
            font-size: 20px !important;
        }

        .font-size-22 {
            font-size: 22px !important;
        }

        .font-size-24 {
            font-size: 24px !important;
        }

        // Font weight help class

        .font-weight-medium {
            font-weight: 500;
        }

        // Social

        .social-list-item {
            height: 2rem;
            width: 2rem;
            line-height: calc(2rem - 2px);
            display: block;
            border: 1px solid $gray-500;
            border-radius: 50%;
            color: $gray-500;
            text-align: center;
        }

        // Minimum Width Sizes
        .w-xs {
            min-width: 80px;
        }

        .w-sm {
            min-width: 95px;
        }

        .w-md {
            min-width: 110px;
        }

        .w-lg {
            min-width: 140px;
        }

        .w-xl {
            min-width: 160px;
        }

        // Hover item
        .item-hovered {
            &:hover {
                background-color: $gray-100;
            }
        }

        // Search bar
        .search-bar {

            .form-control {
                border: none;
                height: $input-height;
                padding-left: 40px;
                padding-right: 20px;
                background-color: $search-bg;
                box-shadow: none;
                border-radius: 30px;
            }

            span {
                position: absolute;
                z-index: 10;
                font-size: 16px;
                line-height: $input-height;
                left: 13px;
                top: 0;
                color: $gray-600;
            }
        }

        /*!
 * Waves v0.7.6
 * http://fian.my.id/Waves 
 * 
 * Copyright 2014-2018 Alfiana E. Sibuea and other contributors 
 * Released under the MIT license 
 * https://github.com/fians/Waves/blob/master/LICENSE */
        .waves-effect {
            position: relative;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
        }

        .waves-effect .waves-ripple {
            position: absolute;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-top: -50px;
            margin-left: -50px;
            opacity: 0;
            background: rgba(0, 0, 0, 0.2);
            background: -webkit-radial-gradient(rgba(0, 0, 0, 0.2) 0, rgba(0, 0, 0, 0.3) 40%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
            background: -o-radial-gradient(rgba(0, 0, 0, 0.2) 0, rgba(0, 0, 0, 0.3) 40%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
            background: -moz-radial-gradient(rgba(0, 0, 0, 0.2) 0, rgba(0, 0, 0, 0.3) 40%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
            background: radial-gradient(rgba(0, 0, 0, 0.2) 0, rgba(0, 0, 0, 0.3) 40%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
            -webkit-transition: all 0.5s ease-out;
            -moz-transition: all 0.5s ease-out;
            -o-transition: all 0.5s ease-out;
            transition: all 0.5s ease-out;
            -webkit-transition-property: -webkit-transform, opacity;
            -moz-transition-property: -moz-transform, opacity;
            -o-transition-property: -o-transform, opacity;
            transition-property: transform, opacity;
            -webkit-transform: scale(0) translate(0, 0);
            -moz-transform: scale(0) translate(0, 0);
            -ms-transform: scale(0) translate(0, 0);
            -o-transform: scale(0) translate(0, 0);
            transform: scale(0) translate(0, 0);
            pointer-events: none;
        }

        .waves-effect.waves-light .waves-ripple {
            background: rgba(255, 255, 255, 0.4);
            background: -webkit-radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
            background: -o-radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
            background: -moz-radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
            background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
        }

        .waves-effect.waves-classic .waves-ripple {
            background: rgba(0, 0, 0, 0.2);
        }

        .waves-effect.waves-classic.waves-light .waves-ripple {
            background: rgba(255, 255, 255, 0.4);
        }

        .waves-notransition {
            -webkit-transition: none !important;
            -moz-transition: none !important;
            -o-transition: none !important;
            transition: none !important;
        }

        .waves-button,
        .waves-circle {
            -webkit-transform: translateZ(0);
            -moz-transform: translateZ(0);
            -ms-transform: translateZ(0);
            -o-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%);
        }

        .waves-button,
        .waves-button:hover,
        .waves-button:visited,
        .waves-button-input {
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: none;
            outline: none;
            color: inherit;
            background-color: rgba(0, 0, 0, 0);
            font-size: 1em;
            line-height: 1em;
            text-align: center;
            text-decoration: none;
            z-index: 1;
        }

        .waves-button {
            padding: 0.85em 1.1em;
            border-radius: 0.2em;
        }

        .waves-button-input {
            margin: 0;
            padding: 0.85em 1.1em;
        }

        .waves-input-wrapper {
            border-radius: 0.2em;
            vertical-align: bottom;
        }

        .waves-input-wrapper.waves-button {
            padding: 0;
        }

        .waves-input-wrapper .waves-button-input {
            position: relative;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .waves-circle {
            text-align: center;
            width: 2.5em;
            height: 2.5em;
            line-height: 2.5em;
            border-radius: 50%;
        }

        .waves-float {
            -webkit-mask-image: none;
            -webkit-box-shadow: 0px 1px 1.5px 1px rgba(0, 0, 0, 0.12);
            box-shadow: 0px 1px 1.5px 1px rgba(0, 0, 0, 0.12);
            -webkit-transition: all 300ms;
            -moz-transition: all 300ms;
            -o-transition: all 300ms;
            transition: all 300ms;
        }

        .waves-float:active {
            -webkit-box-shadow: 0px 8px 20px 1px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 8px 20px 1px rgba(0, 0, 0, 0.3);
        }

        .waves-block {
            display: block;
        }

        .waves-effect.waves-light {
            .waves-ripple {
                background-color: rgba($white, 0.4);
            }
        }

        .waves-effect.waves-primary {
            .waves-ripple {
                background-color: rgba($primary, 0.4);
            }
        }

        .waves-effect.waves-success {
            .waves-ripple {
                background-color: rgba($success, 0.4);
            }
        }

        .waves-effect.waves-info {
            .waves-ripple {
                background-color: rgba($info, 0.4);
            }
        }

        .waves-effect.waves-warning {
            .waves-ripple {
                background-color: rgba($warning, 0.4);
            }
        }

        .waves-effect.waves-danger {
            .waves-ripple {
                background-color: rgba($danger, 0.4);
            }
        }

        body[data-sidebar=dark] .navbar-brand-box {
            background: #fff !important;
        }

        /* for active and inactive use icon */
        /* Define styles for active and inactive users */
        .active-user-icon {
            color: #1cbb8c;
            /* Set the color for active users */
        }

        .inactive-user-icon {
            color: gray;
            /* Set the color for inactive users */
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url('assets') ?>/images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- jquery.vectormap css -->
    <link href="<?= base_url('assets') ?>/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="<?= base_url('assets') ?>/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?= base_url('assets') ?>/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets') ?>/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('assets') ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('assets') ?>/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="#" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="<?= base_url('assets/images/favicon.png') ?>" alt="logo-sm-dark" height="42" style="
    margin-left: -10px;
">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url('assets') ?>/images/logo.png" alt="logo-dark" height="40">
                            </span>
                        </a>

                        <a href="<?= base_url('Admin/index') ?>" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="<?= base_url('websiteassets/img/logo.png') ?>" alt="logo-sm-light" height="20" style="
    margin-left: -10px;
">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url('assets') ?>/images/logo.png" alt="logo-light" height="40">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>


                </div>



                <!-- <div class="app-search d-none d-lg-block" style="text-align:left;">
                           sa;kelp
                        </div> -->
                <!-- <div class="page-title-box d-none d-lg-block" style="float: left !important;
    height: 60px;
    margin-bottom: 0;
    padding: 17px 20px;
    border-radius: 0; justify-content: left !important;">
                    <h3> BBC</h3>
                </div> -->
                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="mb-3 m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="ri-fullscreen-line"></i>
                        </button>
                    </div>
                    <?php
                    $admindata = $this->session->userdata('Admin');
                    $admin = $this->db->where('id', $admindata->id)->get('tbl_admin')->row();
                    ?>
                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="<?php echo base_url(!empty($admin->icon) ? 'uploads/' . $admin->icon : 'assets/images/users/user.png') ?>" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1">Admin</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <a class="dropdown-item" href="<?= base_url('Admin/profile') ?>"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('Admin/changepassword') ?>"><i class=" ri-lock-2-line align-middle me-1"></i> Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="<?= base_url('Admin/logout') ?>"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="<?= base_url('Admin/index') ?>" class="waves-effect">
                                <i class="ri-dashboard-line"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?= base_url('Admin/job') ?>" class=" waves-effect">
                                <i class="ri-calendar-event-fill"></i><span class="badge rounded-pill bg-primary float-end"></span>
                                <span>Jobs</span>
                            </a>
                        </li>

                        <!-- <li>
                <a href="<?= site_url('Admin/events') ?>" class=" waves-effect">
                    <i class="ri-calendar-event-fill"></i><span class="badge rounded-pill bg-primary float-end"></span>
                    <span>Events</span>
                </a>
            </li> -->

                        <li>
                            <a href="<?= base_url('Admin/blog') ?>" class=" waves-effect">
                                <i class="ri-image-fill"></i><span class="badge rounded-pill bg-primary float-end"></span>
                                <span>Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('Admin/news') ?>" class=" waves-effect">
                                <i class="ri-newspaper-line"></i><span class="badge rounded-pill bg-primary float-end"></span>
                                <span>News</span>
                            </a>
                        </li>

                </div>
                <!-- Sidebar -->
            </div>
        </div>