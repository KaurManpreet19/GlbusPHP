<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/index.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <style>
    div.ruby-menu-demo-header {
      position: relative;
      left: 0;
      top: 0;
      width: 100%;
      height: auto;
      padding: 0;
      margin: 0;
      z-index: 99999
    }


    div.ruby-menu-demo-header-bg div.ruby-menu-demo-download>span {
      color: #efefef
    }

    div.ruby-menu-demo-header-bg div.ruby-menu-demo-download>span>span {
      color: #efefef
    }

    div.ruby-menu-demo-description {
      position: relative;
      width: 980px;
      height: 160px;
      margin: 0 auto;
      padding: 0
    }

    div.ruby-menu-demo-description img {
      max-width: 200px;
      float: left;
      margin: 50px 20px 0 0
    }

    span.ruby-menu-demo-highlight {
      color: #333
    }

    div.ruby-menu-demo-bg-light,
    div.ruby-menu-demo-bg-dark {
      width: 980px;
      height: auto;
      position: relative;
      background: #fff;
      margin: 0 auto;
      font-family: 'Open Sans', sans-serif;
      font-size: 16px
    }

    div.ruby-menu-demo-bg-dark {
      background: efefef
    }

    div.ruby-menu-demo-bg-light-c:after,
    div.ruby-menu-demo-bg-dark-c:after {
      content: "";
      display: table;
      clear: both
    }

    div.ruby-menu-demo-cv-1 {
      float: left;
      width: 33%
    }

    div.ruby-menu-demo-cv-2 {
      float: left;
      width: 67%
    }

    div.ruby-menu-demo-cv-3 {
      float: left;
      width: 48%
    }

    div.ruby-menu-demo-cv-4 {
      float: left;
      width: 52%
    }

    div.ruby-menu-demo-cr-1 {
      float: left;
      width: 33%
    }

    div.ruby-menu-demo-cr-2 {
      float: left;
      width: 66%
    }

    div.ruby-menu-demo-cs-1 {
      float: left;
      width: 33%
    }

    div.ruby-menu-demo-cs-2 {
      float: left;
      width: 66%
    }

    div.ruby-menu-demo-cf-1,
    div.ruby-menu-demo-cf-2,
    div.ruby-menu-demo-cf-3,
    div.ruby-menu-demo-cf-4 {
      float: left;
      width: 25%;
      text-align: center
    }

    div.ruby-menu-demo-f-icon {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin: 0 auto;
      padding: 22px;
      font-size: 30px;
      background: #efefef;
      color: #aaa
    }

    div.ruby-menu-demo-f-title {
      width: 100%;
      height: 30px;
      margin: 0 auto;
      margin-top: 20px;
      font-weight: 700;
      font-size: 18px
    }

    div.ruby-menu-demo-f-desc {
      font-size: 14px;
      line-height: 24px;
      color: #555;
      padding: 15px
    }

    div.ruby-menu-demo-cs-1 table {
      line-height: 20px
    }

    div.ruby-menu-demo-cs-1 table tr,
    div.ruby-menu-demo-cs-1 table td {
      padding: 0;
      font-weight: 700
    }

    img.blog-img-custom {
      max-width: 100% !important;
    }

    div.ruby-menu-demo-cs-1 table td:last-child {
      padding-top: 5px
    }

    h2.ruby-menu-demo-slogan-1,
    h3.ruby-menu-demo-slogan-1 {
      font-size: 20px;
      font-weight: 300;
      text-transform: uppercase;
      color: #b1b1b1;
      margin: 0
    }

    h1.ruby-menu-demo-slogan-2,
    h3.ruby-menu-demo-slogan-2 {
      font-size: 36px;
      font-weight: 700;
      text-transform: none;
      color: #222;
      margin: 0
    }

    p.ruby-menu-demo-slogan-description,
    p.ruby-menu-demo-slogan-description-2 {
      font-size: 16px;
      line-height: 24px;
      color: #444;
      margin: 35px 0
    }

    p.ruby-menu-demo-slogan-description-2 {
      color: #666;
      font-weight: 600;
      margin: -10px 0
    }

    span.ruby-menu-demo-code {
      color: #888;
      text-decoration: underline
    }

    td.ruby-menu-demo-theme-td-1 {
      max-width: 30px;
      text-align: left;
      padding: 6px
    }

    td.ruby-menu-demo-theme-td-2 {
      min-width: 120px;
      text-align: left;
      padding: 6px
    }

    td.ruby-menu-demo-theme-td-1:hover {
      cursor: pointer
    }

    .ruby-menu-demo-circle {
      border-radius: 50%;
      width: 24px;
      height: 24px;
      border: 4px solid #222;
      display: inline-block;
      margin: 0
    }

    .ruby-menu-demo-color-1 {
      background: #1aad86
    }

    .ruby-menu-demo-color-2 {
      background: #0c67c2
    }

    .ruby-menu-demo-color-3 {
      background: #ce0661
    }

    .ruby-menu-demo-color-4 {
      background: #ea7500
    }

    .ruby-menu-demo-color-5 {
      background: #74ba27
    }

    .ruby-menu-demo-color-6 {
      background: #ff3264
    }

    .ruby-menu-demo-color-7 {
      background: #fad814
    }

    .ruby-menu-demo-color-8 {
      background: #ccc
    }

    .ruby-menu-demo-color-9 {
      background: #111;
      border-color: #ccc
    }

    .ruby-menu-demo-color-10 {
      background: #036de2;
      border-color: #489efd
    }

    .ruby-menu-demo-color-11 {
      background: #f85252;
      border-color: #444
    }

    .ruby-menu-demo-color-12 {
      background: #ca79d0;
      border-color: #f2def3
    }

    .ruby-menu-demo-color-13 {
      background: #efefef;
      border-color: #222
    }

    .ruby-menu-demo-color-14 {
      background: #ccc
    }

    div.ruby-menu-demo-download {
      position: absolute;
      width: auto;
      top: 55px;
      right: 0
    }

    div.ruby-menu-demo-download .fa {
      font-size: 20px;
      margin-right: 10px
    }

    div.ruby-menu-demo-download>span {
      font-size: 16px;
      display: block;
      margin: 10px 26px
    }

    div.ruby-menu-demo-download>span>span {
      font-size: 20px;
      color: #555;
      font-weight: 700
    }

    button.ruby-btn {
      background: #9a1a18;
      border: 2px solid #9a1a18;
      color: #fff;
      border-radius: 0;
      padding: 10px 25px;
      font-size: 16px;
      font-weight: 700;
      cursor: pointer
    }

    button.ruby-btn:hover {
      background: #fff;
      color: #9a1a18
    }

    .switch {
      display: table-cell;
      vertical-align: middle;
      padding: 10px
    }

    .cmn-toggle {
      position: absolute;
      margin-left: -9999px;
      visibility: hidden
    }

    .cmn-toggle+label {
      display: block;
      position: relative;
      cursor: pointer;
      outline: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    input.cmn-toggle-round+label {
      padding: 2px;
      margin-top: -10px;
      width: 40px;
      height: 20px;
      background-color: #ddd;
      -webkit-border-radius: 20px;
      -moz-border-radius: 20px;
      -ms-border-radius: 20px;
      -o-border-radius: 20px;
      border-radius: 20px
    }

    input.cmn-toggle-round+label:before,
    input.cmn-toggle-round+label:after {
      display: block;
      position: absolute;
      top: 1px;
      left: 1px;
      bottom: 1px;
      content: ""
    }

    input.cmn-toggle-round+label:before {
      right: 1px;
      background-color: #f1f1f1;
      -webkit-border-radius: 20px;
      -moz-border-radius: 20px;
      -ms-border-radius: 20px;
      -o-border-radius: 20px;
      border-radius: 20px;
      -webkit-transition: background .4s;
      -moz-transition: background .4s;
      -o-transition: background .4s;
      transition: background .4s
    }

    input.cmn-toggle-round+label:after {
      width: 18px;
      background-color: #fff;
      -webkit-border-radius: 100%;
      -moz-border-radius: 100%;
      -ms-border-radius: 100%;
      -o-border-radius: 100%;
      border-radius: 100%;
      -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      -moz-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      -webkit-transition: margin .4s;
      -moz-transition: margin .4s;
      -o-transition: margin .4s;
      transition: margin .4s
    }

    input.cmn-toggle-round:checked+label:before,
    input.cmn-toggle-on+label:before {
      background-color: #8ce196
    }

    input.cmn-toggle-round:checked+label:after,
    input.cmn-toggle-on+label:after {
      margin-left: 20px
    }

    input.cmn-toggle-on:checked+label:before {
      background-color: #f1f1f1
    }

    input.cmn-toggle-on:checked+label:after {
      margin-left: 0
    }

    img.iphone7 {
      max-width: 350px;
      float: right;
      margin-right: 0
    }

    @media(min-width: 768px) and (max-width:991px) {
      body {
        overflow-x: hidden
      }

      div.ruby-menu-demo-description {
        position: relative;
        width: 760px;
        height: 160px;
        margin: 0 auto;
        padding: 0
      }

      div.ruby-menu-demo-description img {
        max-width: 200px;
        float: left;
        margin: 50px 20px 0 0
      }

      div.ruby-menu-demo-bg-light,
      div.ruby-menu-demo-bg-dark {
        width: 760px;
        font-size: 14px
      }

      div.ruby-menu-demo-cs-1 {
        width: 27%
      }

      div.ruby-menu-demo-cs-2 {
        width: 73%
      }

      td.ruby-menu-demo-theme-td-1 {
        max-width: 27px;
        padding: 7px
      }

      td.ruby-menu-demo-theme-td-2 {
        min-width: 100px;
        padding: 7px
      }

      .ruby-menu-demo-circle {
        width: 22px;
        height: 22px;
        border: 3px solid #222
      }

      img.iphone7 {
        max-width: 320px;
        float: right;
        margin-right: 20px
      }
    }

    @media(max-width: 767px) {
      div.ruby-menu-demo-header {
        width: 100%;
        height: auto
      }

      div.ruby-menu-demo-description {
        width: 100%;
        margin: 0 auto;
        margin-bottom: 220px;
        padding: 10px;
        text-align: center
      }

      div.ruby-menu-demo-description img {
        float: none;
        margin: 90px 0 0
      }

      div.ruby-menu-demo-download {
        position: relative;
        width: auto;
        top: 25px;
        right: auto;
        left: auto
      }

      div.ruby-menu-demo-download>span {
        font-size: 20px;
        margin: 25px auto
      }

      div.ruby-menu-demo-download>span>span {
        font-size: 26px
      }

      button.ruby-btn {
        padding: 14px 25px;
        font-size: 16px;
        text-transform: uppercase
      }

      div.ruby-menu-demo-bg-light.ruby-menu-demo-switches {
        display: none
      }

      div.ruby-menu-demo-bg-light,
      div.ruby-menu-demo-bg-dark {
        width: 100%;
        font-size: 16px;
        padding: 25px;
        margin-bottom: -100px
      }

      div.ruby-menu-demo-cv-1 {
        width: 100%
      }

      div.ruby-menu-demo-cv-2 {
        width: 100%
      }

      div.ruby-menu-demo-cv-3 {
        width: 100%
      }

      div.ruby-menu-demo-cv-4 {
        width: 100%
      }

      div.ruby-menu-demo-cr-1 {
        width: 100%
      }

      div.ruby-menu-demo-cr-2 {
        width: 100%;
        margin-top: 40px
      }

      div.ruby-menu-demo-cf-1,
      div.ruby-menu-demo-cf-2,
      div.ruby-menu-demo-cf-3,
      div.ruby-menu-demo-cf-4 {
        float: left;
        width: 50%;
        text-align: center
      }

      div.ruby-menu-demo-f-desc {
        margin-bottom: 30px
      }

      img.iphone7 {
        max-width: 300px;
        float: none;
        margin-right: 0 auto
      }
    }


    /* theme */

    div.ruby-wrapper,
    div.ruby-wrapper.ruby-vertical {
      background: #f9f9f9;
      color: #222
    }

    ul.ruby-menu>li>a {
      color: #222
    }

    ul.ruby-menu>li>a:hover,
    ul.ruby-menu>li:hover>a,
    ul.ruby-menu>li.ruby-active-menu-item>a:hover,
    ul.ruby-menu>li.ruby-active-menu-item:hover>a {
      background: #222;
      color: #fff
    }

    ul.ruby-menu>li.ruby-active-menu-item>a {
      background: #efefef;
      color: #222
    }

    ul.ruby-menu.ruby-menu-dividers>li>a,
    ul.ruby-menu.ruby-menu-dividers>li.ruby-menu-social>a {
      border-left: 1px solid #ddd;
      border-right: 1px solid #fff
    }

    ul.ruby-menu.ruby-menu-dividers>li:first-child>a,
    ul.ruby-menu.ruby-menu-dividers>li.ruby-menu-social:last-child>a {
      border-left: none
    }

    ul.ruby-menu.ruby-vertical.ruby-menu-dividers>li>a {
      border: none;
      border-top: 1px solid #ddd;
      border-bottom: 1px solid #fff
    }

    ul.ruby-menu.ruby-vertical.ruby-menu-dividers>li:first-child>a {
      border-top: none
    }

    ul.ruby-menu.ruby-menu-dividers>li>a:hover,
    ul.ruby-menu.ruby-menu-dividers>li:hover>a {
      border-left: 1px solid #222;
      border-right: 1px solid #222
    }

    ul.ruby-menu.ruby-vertical.ruby-menu-dividers>li>a:hover,
    ul.ruby-menu.ruby-vertical.ruby-menu-dividers>li:hover>a {
      border-bottom: 1px solid #222
    }

    ul.ruby-menu.ruby-menu-dividers>li.ruby-active-menu-item>a {
      border-left: 1px solid #efefef;
      border-right: 1px solid #fff
    }

    ul.ruby-menu.ruby-vertical.ruby-menu-dividers>li.ruby-active-menu-item>a {
      border-bottom: 1px solid #fff;
      border-left: none;
      border-right: none
    }

    ul.ruby-menu.ruby-vertical.ruby-menu-dividers>li>a {
      border-left: none;
      border-right: none
    }

    ul.ruby-menu.ruby-vertical.ruby-menu-dividers>li.ruby-active-menu-item>a:hover,
    ul.ruby-menu.ruby-vertical.ruby-menu-dividers>li.ruby-active-menu-item:hover>a {
      border-bottom: 1px solid #222;
      border-left: none
    }

    ul.ruby-menu>li>ul,
    ul.ruby-menu>li>ul>li>ul,
    ul.ruby-menu>li>ul>li>ul>li>ul {
      border-top: 4px solid #222
    }

    ul.ruby-menu>li>ul>li>a,
    ul.ruby-menu>li>ul>li>ul>li>a,
    ul.ruby-menu>li>ul>li>ul>li>ul>li>a {
      background: #fff;
      color: #666
    }

    ul.ruby-menu>li>ul>li:hover>a,
    ul.ruby-menu>li>ul>li>a:hover,
    ul.ruby-menu>li>ul>li>ul>li:hover>a,
    ul.ruby-menu>li>ul>li>ul>li>a:hover,
    ul.ruby-menu>li>ul>li>ul>li>ul>li:hover>a,
    ul.ruby-menu>li>ul>li>ul>li>ul>li>a:hover {
      background: #efefef
    }

    ul.ruby-menu>li.ruby-menu-mega>div,
    ul.ruby-menu>li.ruby-menu-mega-blog>div,
    ul.ruby-menu>li.ruby-menu-mega-shop>div {
      background: #fff;
      border-top: 4px solid #222
    }

    ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav {
      background: #efefef
    }

    ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>a {
      background: #efefef;
      color: #666
    }

    ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li.ruby-active-menu-item>a {
      background: #e6e6e6
    }

    ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>div {
      background: #fff
    }

    ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li:hover>a {
      background: #ddd
    }

    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul {
      background: #efefef;
      border-bottom: 1px solid #ddd
    }

    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a {
      color: #666
    }

    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div {
      background: #fff
    }

    ul.ruby-menu>li.ruby-menu-mega>div ul li>a,
    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div ul>li>a {
      color: #555
    }

    ul.ruby-menu>li.ruby-menu-mega>div ul li>a:hover,
    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div ul>li>a:hover {
      color: #222
    }

    ul.ruby-menu>li.ruby-menu-mega>div ul.ruby-list-with-images li span.ruby-list-desc {
      color: #999
    }

    span.ruby-c-title,
    span.ruby-c-title a {
      color: #222
    }

    span.ruby-c-title a:hover,
    span.ruby-c-category,
    span.ruby-c-category a,
    span.ruby-c-date,
    span.ruby-c-date a {
      color: #444
    }

    span.ruby-c-category a:hover,
    span.ruby-c-date a:hover {
      color: #222
    }

    @media(min-width: 768px) {

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:before,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:after {
        background-color: #222
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:hover {
        color: #333
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li.ruby-active-menu-item>a:after,
      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li:hover>a:after {
        border-color: transparent #fff transparent transparent
      }
    }

    @media(max-width: 767px) {
      ul.ruby-menu>li>a {
        background: #efefef
      }

      ul.ruby-menu>li>a:hover,
      ul.ruby-menu>li:hover>a,
      ul.ruby-menu>li.ruby-active-menu-item>a:hover {
        background: #ccc;
        color: #111
      }

      ul.ruby-menu>li.ruby-active-menu-item>a {
        background: #ccc
      }

      ul.ruby-menu>li>ul>li>a,
      ul.ruby-menu>li>ul>li>ul>li>a,
      ul.ruby-menu>li>ul>li>ul>li>ul>li>a,
      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>a,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a {
        background: #d1d1d1
      }

      ul.ruby-menu>li>ul>li:hover>a,
      ul.ruby-menu>li>ul>li>a:hover,
      ul.ruby-menu>li>ul>li>ul>li:hover>a,
      ul.ruby-menu>li>ul>li>ul>li>a:hover,
      ul.ruby-menu>li>ul>li>ul>li>ul>li:hover>a,
      ul.ruby-menu>li>ul>li>ul>li>ul>li>a:hover {
        background: #d9d9d9;
        color: #111
      }

      ul.ruby-menu>li>ul>li>ul>li>a {
        background: #e5e5e5
      }

      ul.ruby-menu>li>ul>li>ul>li:hover>a,
      ul.ruby-menu>li>ul>li>ul>li>a:hover {
        background: #e1e1e1
      }

      ul.ruby-menu>li>ul>li>ul>li>ul>li>a {
        background: #efefef
      }

      ul.ruby-menu>li>ul>li>ul>li>ul>li:hover>a,
      ul.ruby-menu>li>ul>li>ul>li>ul>li>a:hover {
        background: #fff
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li.ruby-active-menu-item>a {
        background: #bcbcbc
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li:hover>a {
        background: #d9d9d9
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li.ruby-active-menu-item>a {
        background: #bcbcbc
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li:hover>a,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:hover,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li.ruby-active-menu-item>a {
        background: #d9d9d9
      }

      span.ruby-dropdown-toggle:after {
        color: #fff
      }

      ul.ruby-menu>li>a:before,
      ul.ruby-menu>li>ul>li>a:before,
      ul.ruby-menu>li>ul>li>ul>li>a:before,
      ul.ruby-menu>li>ul>li>ul>li>ul>li>a:before,
      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>a:before,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:before {
        background: #333
      }

      ul.ruby-menu>li>ul>li>a:before,
      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>a:before,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:before {
        background: #555
      }

      ul.ruby-menu>li>ul>li>ul>li>a:before {
        background: #777
      }

      ul.ruby-menu>li>ul>li>ul>li>ul>li>a:before {
        background: #999
      }

      .c-hamburger span {
        background: #222
      }

      .c-hamburger span::before,
      .c-hamburger span::after {
        background-color: #222
      }

      .c-hamburger--htx {
        background-color: #efefef;
        color: #222
      }

      .c-hamburger--htx.is-active {
        background-color: #ddd
      }

      ul.ruby-menu>li.ruby-menu-mega>div,
      ul.ruby-menu>li.ruby-menu-mega-blog>div,
      ul.ruby-menu>li.ruby-menu-mega-shop>div {
        border-top: none
      }

      ul.ruby-menu>li>ul,
      ul.ruby-menu>li>ul>li>ul,
      ul.ruby-menu>li>ul>li>ul>li>ul {
        border-top: none
      }

      ul.ruby-menu.ruby-menu-dividers>li,
      ul.ruby-menu.ruby-menu-dividers>li>a,
      ul.ruby-menu.ruby-menu-dividers>li.ruby-menu-social>a,
      ul.ruby-menu.ruby-menu-dividers>li>a:hover,
      ul.ruby-menu.ruby-menu-dividers>li:hover>a {
        border: none
      }
    }

    /* transision */

    span.ruby-dropdown-toggle {
      transition: transform .3s ease
    }

    span.ruby-dropdown-toggle:after {
      transition: transform .3s ease
    }

    @media(min-width: 767px) {
      ul.ruby-menu>li>a:after {
        transition: all .3s ease
      }

      ul.ruby-menu>li>ul>li>a:after,
      ul.ruby-menu>li>ul>li>ul>li>a:after,
      ul.ruby-menu>li>ul>li>ul>li>ul>li>a:after {
        transition: all .3s ease
      }

      ul.ruby-menu>li>ul,
      ul.ruby-menu>li>div {
        transform: translateY(25px);
        transition: all .3s ease
      }

      ul.ruby-menu>li:hover>ul,
      ul.ruby-menu>li:hover>div {
        transform: translateY(0)
      }

      ul.ruby-menu.ruby-vertical>li>ul,
      ul.ruby-menu.ruby-vertical>li>div {
        transform: translateX(25px);
        transition: all .3s ease
      }

      ul.ruby-menu.ruby-vertical>li:hover>ul,
      ul.ruby-menu.ruby-vertical>li:hover>div {
        transform: translateX(0)
      }

      ul.ruby-menu>li>ul>li>ul,
      ul.ruby-menu>li>ul>li>ul>li>ul,
      ul.ruby-menu>li>ul>li>ul>li>ul>li>ul {
        transform: translateX(25px);
        transition: all .3s ease
      }

      ul.ruby-menu>li>ul>li:hover>ul,
      ul.ruby-menu>li>ul>li>ul>li:hover>ul,
      ul.ruby-menu>li>ul>li>ul>li>ul>li:hover>ul {
        transform: translateX(0)
      }

      ul.ruby-menu>li>ul>li.ruby-open-to-left>ul,
      ul.ruby-menu>li>ul>li>ul>li.ruby-open-to-left>ul,
      ul.ruby-menu>li>ul>li>ul>li>ul>li.ruby-open-to-left>ul {
        transform: translateX(-25px);
        transition: all .3s ease
      }

      ul.ruby-menu>li>ul>li.ruby-open-to-left:hover>ul,
      ul.ruby-menu>li>ul>li>ul>li.ruby-open-to-left:hover>ul,
      ul.ruby-menu>li>ul>li>ul>li>ul>li.ruby-open-to-left:hover>ul {
        transform: translateX(0)
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>div {
        transform: translateY(-50px);
        transition: all .5s ease
      }

      ul.ruby-menu>li.ruby-menu-mega-blog:hover>div>ul.ruby-menu-mega-blog-nav>li.ruby-active-menu-item>div,
      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li:hover>div {
        transform: translateY(0)
      }

      ul.ruby-menu.ruby-vertical>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>div {
        transform: translateX(50px);
        transition: all .5s ease
      }

      ul.ruby-menu.ruby-vertical>li.ruby-menu-mega-blog:hover>div>ul.ruby-menu-mega-blog-nav>li.ruby-active-menu-item>div,
      ul.ruby-menu.ruby-vertical>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li:hover>div {
        transform: translateX(0)
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div {
        transform: translateY(-50px);
        transition: all .5s ease
      }

      ul.ruby-menu>li.ruby-menu-mega-shop:hover>div>ul>li.ruby-active-menu-item>div,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li:hover>div {
        transform: translateY(0)
      }

      ul.ruby-menu.ruby-vertical>li.ruby-menu-mega-shop>div>ul>li>div {
        transform: translateX(50px);
        transition: all .5s ease
      }

      ul.ruby-menu.ruby-vertical>li.ruby-menu-mega-shop:hover>div>ul>li.ruby-active-menu-item>div,
      ul.ruby-menu.ruby-vertical>li.ruby-menu-mega-shop>div>ul>li:hover>div {
        transform: translateX(0)
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:before,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:after {
        -webkit-transition: all .4s ease;
        transition: all .4s ease
      }
    }

    /* main */

    *,
    :before,
    :after {
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box
    }

    body {
      font-family: 'Open Sans', sans-serif
    }

    div.ruby-wrapper {
      position: relative;
      width: 100%;
      margin: 0 auto;
      background: #333
    }

    div.ruby-wrapper ul {
      margin: 0;
      padding: 0;
      list-style: none
    }

    div.ruby-wrapper>ul {
      position: relative
    }

    ul.ruby-menu>li {
      float: left;
      font-size: 14px
    }

    ul.ruby-menu>li.ruby-menu-right {
      float: right
    }

    ul.ruby-menu>li>a {
      display: block;
      line-height: 50px;
      padding: 0 25px 0 15px;
      color: #efefef;
      text-decoration: none;
      font-family: 'Open Sans', sans-serif;
      font-weight: 700;
      text-transform: uppercase
    }

    ul.ruby-menu>li>a:only-child {
      padding: 0 15px
    }

    ul.ruby-menu>li>a:hover,
    ul.ruby-menu>li:hover>a,
    ul.ruby-menu>li.ruby-active-menu-item>a:hover,
    ul.ruby-menu>li.ruby-active-menu-item:hover>a {
      background: #9a1a18
    }

    ul.ruby-menu>li>a:only-child:after,
    ul.ruby-menu>li:hover>a:only-child:after {
      content: ''
    }

    ul.ruby-menu>li.ruby-active-menu-item>a {
      background: $dark-red
    }

    ul.ruby-menu>li>a .fa {
      position: relative;
      width: 24px
    }

    ul.ruby-menu>li>a>img {
      max-width: 16px;
      display: block
    }

    ul.ruby-menu>li.ruby-menu-social>a {
      padding: 0;
      padding: 0 8px;
      font-size: 16px
    }

    ul.ruby-menu>li.ruby-menu-social>a>span {
      display: none
    }

    ul.ruby-menu>li.ruby-menu-social.ruby-menu-search>a,
    ul.ruby-menu.ruby-menu-dividers>li.ruby-menu-social.ruby-menu-search>a {
      transition: all .5s ease;
      max-height: 50px;
      width: 30px;
      transition: all .5s ease;
      transition-delay: .3s
    }

    ul.ruby-menu>li.ruby-menu-social.ruby-menu-search>a:hover,
    ul.ruby-menu.ruby-menu-dividers>li.ruby-menu-social.ruby-menu-search>a:hover {
      width: 120px
    }

    ul.ruby-menu>li.ruby-menu-social.ruby-menu-search>a:hover>span input,
    ul.ruby-menu.ruby-menu-dividers>li.ruby-menu-social.ruby-menu-search>a:hover>span input {
      transform: scaleY(1);
      max-width: 80px
    }

    ul.ruby-menu>li.ruby-menu-social.ruby-menu-search>a span,
    ul.ruby-menu.ruby-menu-dividers>li.ruby-menu-social.ruby-menu-search>a span {
      display: inline
    }

    ul.ruby-menu>li.ruby-menu-social.ruby-menu-search>a>span input,
    ul.ruby-menu.ruby-menu-dividers>li.ruby-menu-social.ruby-menu-search>a>span input {
      position: absolute;
      width: 80px;
      height: 50px;
      line-height: 50px;
      margin: 0;
      background: none;
      color: #efefef;
      border: none;
      font-family: 'Open Sans', sans-serif;
      font-size: 14px;
      font-weight: 700;
      text-transform: uppercase;
      max-width: 0;
      transform: scaleY(0);
      transition: all .5s ease;
      transition-delay: .3s
    }

    ul.ruby-menu>li.ruby-menu-social.ruby-menu-search>a>span input:focus {
      outline: none;
      color: #efefef
    }

    ul.ruby-menu>li.ruby-menu-social.ruby-menu-search>a>span input::-webkit-input-placeholder {
      color: #efefef
    }

    ul.ruby-menu.ruby-menu-dividers>li>a,
    ul.ruby-menu.ruby-menu-dividers>li.ruby-menu-social>a {
      border-left: 1px solid #111;
      border-right: 1px solid #666
    }

    ul.ruby-menu.ruby-menu-dividers>li:first-child>a,
    ul.ruby-menu.ruby-menu-dividers>li.ruby-menu-social:last-child>a {
      border-left: none
    }

    ul.ruby-menu.ruby-vertical.ruby-menu-dividers>li>a {
      border: none;
      border-top: 1px solid #111;
      border-bottom: 1px solid #666
    }

    ul.ruby-menu.ruby-vertical.ruby-menu-dividers>li:first-child>a {
      border-top: none
    }

    ul.ruby-menu.ruby-menu-dividers>li>a:hover,
    ul.ruby-menu.ruby-menu-dividers>li:hover>a {
      border-right: 1px solid #9a1a18
    }

    ul.ruby-menu.ruby-vertical.ruby-menu-dividers>li>a:hover,
    ul.ruby-menu.ruby-vertical.ruby-menu-dividers>li:hover>a {
      border-bottom: 1px solid #9a1a18
    }

    ul.ruby-menu.ruby-menu-dividers>li.ruby-active-menu-item>a {
      border-right: 1px solid $dark-red;
    }

    ul.ruby-menu.ruby-vertical.ruby-menu-dividers>li.ruby-active-menu-item>a {
      border-bottom: 1px solid $dark-red;
    }

    ul.ruby-menu>li>ul,
    ul.ruby-menu>li>ul>li>ul,
    ul.ruby-menu>li>ul>li>ul>li>ul {
      position: absolute;
      -webkit-box-shadow: 0 8px 24px -5px #ccc;
      -moz-box-shadow: 0 8px 24px -5px #ccc;
      box-shadow: 0 8px 24px -5px #ccc;
      border-top: 4px solid #9a1a18
    }

    ul.ruby-menu>li>ul>li,
    ul.ruby-menu>li>ul>li>ul>li {
      position: relative
    }

    ul.ruby-menu>li>ul>li>a,
    ul.ruby-menu>li>ul>li>ul>li>a,
    ul.ruby-menu>li>ul>li>ul>li>ul>li>a {
      display: block;
      width: 170px;
      line-height: 40px;
      padding: 0 35px 0 25px;
      background: #fff;
      color: #666;
      text-decoration: none;
      font-size: 14px
    }

    ul.ruby-menu>li>ul>li:hover>a,
    ul.ruby-menu>li>ul>li>a:hover,
    ul.ruby-menu>li>ul>li>ul>li:hover>a,
    ul.ruby-menu>li>ul>li>ul>li>a:hover,
    ul.ruby-menu>li>ul>li>ul>li>ul>li:hover>a,
    ul.ruby-menu>li>ul>li>ul>li>ul>li>a:hover {
      background: #efefef
    }

    ul.ruby-menu>li>ul>li>a:only-child:after,
    ul.ruby-menu>li>ul>li>ul>li>a:only-child:after,
    ul.ruby-menu>li>ul>li>ul>li>ul>li>a:only-child:after {
      content: ""
    }

    ul.ruby-menu>li>ul>li>a .fa,
    ul.ruby-menu>li>ul>li>ul>li>a .fa,
    ul.ruby-menu>li>ul>li>ul>li>ul>li>a .fa {
      position: relative;
      width: 24px
    }

    ul.ruby-menu>li.ruby-menu-right>ul {
      right: 0
    }

    ul.ruby-menu>li>ul>li>ul,
    ul.ruby-menu>li>ul>li>ul>li>ul {
      left: 170px;
      top: -4px;
      z-index: 100
    }

    ul.ruby-menu>li>ul>li.ruby-open-to-left>ul,
    ul.ruby-menu>li>ul>li>ul>li.ruby-open-to-left>ul {
      left: auto;
      right: 170px
    }

    ul.ruby-menu>li.ruby-menu-mega>div,
    ul.ruby-menu>li.ruby-menu-mega-blog>div,
    ul.ruby-menu>li.ruby-menu-mega-shop>div {
      position: absolute;
      width: 100%;
      height: auto;
      top: 50px;
      left: 0;
      background: #fff;
      border-top: 4px solid #9a1a18;
      overflow: hidden;
      -webkit-box-shadow: 0 8px 24px -5px #ccc;
      -moz-box-shadow: 0 8px 24px -5px #ccc;
      box-shadow: 0 8px 24px -5px #ccc
    }

    ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav {
      position: relative;
      width: 200px;
      height: 100%;
      left: 0;
      top: 0;
      background: #efefef
    }

    ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li {
      font-size: 14px
    }

    ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>a {
      display: block;
      line-height: 40px;
      padding: 0 15px;
      background: #efefef;
      color: #666;
      text-decoration: none
    }

    ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li.ruby-active-menu-item>a {
      background: #e6e6e6
    }

    ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>div {
      position: absolute;
      width: 780px;
      height: auto;
      min-height: 100%;
      left: 200px;
      top: 0;
      background: #fff
    }

    ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li:hover>a {
      background: #ddd
    }

    ul.ruby-menu>li.ruby-menu-mega-shop>div {
      text-align: center;
      z-index: 999999
    }

    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul {
      width: 100%;
      background: #efefef;
      margin: 0 auto;
      padding: 0;
      border-bottom: 1px solid #ddd;
      font-size: 0;
      z-index: 100
    }

    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li {
      display: inline-block;
      margin: 0
    }

    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a {
      display: block;
      padding: 20px 15px;
      text-transform: uppercase;
      font-weight: 700;
      font-size: 14px;
      font-stretch: expanded;
      color: #666
    }

    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li:hover>a,
    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:hover,
    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li.ruby-active-menu-item>a {
      text-decoration: none
    }

    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a {
      position: relative;
      text-decoration: none;
      display: inline-block
    }

    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div {
      position: absolute;
      width: 100%;
      left: 0;
      top: auto;
      margin-top: 1px;
      text-align: left;
      background: #fff;
      z-index: -1
    }

    div.ruby-grid,
    div.ruby-grid-lined {
      position: relative;
      width: 100%;
      padding: 0;
      margin: 0
    }

    div.ruby-grid>div.ruby-row {
      position: relative;
      width: 100%;
      height: auto
    }

    div.ruby-grid>div.ruby-row div.ruby-row [class^="ruby-col"] {
      margin-top: 16px
    }

    div.ruby-grid>div.ruby-row div.ruby-row:first-of-type [class^="ruby-col"] {
      margin-top: 0
    }

    div.ruby-grid.ruby-grid-lined>div.ruby-row:after {
      content: "";
      width: 100%;
      height: 1px;
      left: 0;
      bottom: 0;
      background: -webkit-linear-gradient(left, rgba(204, 204, 204, 0) 0%, rgba(204, 204, 204, 0.48) 24%, rgba(204, 204, 204, 1) 50%, rgba(204, 204, 204, 0.42) 79%, rgba(204, 204, 204, 0) 100%)
    }

    div.ruby-grid.ruby-grid-lined>div.ruby-row:last-child:after {
      height: 0
    }

    div.ruby-grid>div.ruby-row::after {
      content: "";
      display: table;
      clear: both
    }

    div.ruby-grid>div.ruby-row [class^="ruby-col"] {
      position: relative;
      float: left;
      height: auto
    }

    div.ruby-grid>div.ruby-row>[class^="ruby-col"] {
      padding: 16px
    }

    div.ruby-grid>div.ruby-row>[class^="ruby-col"] [class^="ruby-col"] {
      padding-left: 16px
    }

    div.ruby-grid>div.ruby-row>[class^="ruby-col"] [class^="ruby-col"]:first-of-type {
      padding-left: 0
    }

    div.ruby-grid>div.ruby-row div.ruby-col-1 {
      width: 8.33%
    }

    div.ruby-grid>div.ruby-row div.ruby-col-2 {
      width: 16.66%
    }

    div.ruby-grid>div.ruby-row div.ruby-col-3 {
      width: 25%
    }

    div.ruby-grid>div.ruby-row div.ruby-col-4 {
      width: 33.33%
    }

    div.ruby-grid>div.ruby-row div.ruby-col-5 {
      width: 41.66%
    }

    div.ruby-grid>div.ruby-row div.ruby-col-6 {
      width: 50%
    }

    div.ruby-grid>div.ruby-row div.ruby-col-7 {
      width: 58.33%
    }

    div.ruby-grid>div.ruby-row div.ruby-col-8 {
      width: 66.66%
    }

    div.ruby-grid>div.ruby-row div.ruby-col-9 {
      width: 75%
    }

    div.ruby-grid>div.ruby-row div.ruby-col-10 {
      width: 83.33%
    }

    div.ruby-grid>div.ruby-row div.ruby-col-11 {
      width: 91.66%
    }

    div.ruby-grid>div.ruby-row div.ruby-col-12 {
      width: 100%
    }

    div.ruby-grid.ruby-grid-lined>div.ruby-row>div[class^="ruby-col"]:after {
      content: "";
      position: absolute;
      top: 0;
      width: 1px;
      height: 100%;
      right: 0;
      background: -webkit-linear-gradient(top, rgba(204, 204, 204, 0) 0%, rgba(204, 204, 204, 0.48) 24%, rgba(204, 204, 204, 1) 50%, rgba(204, 204, 204, 0.42) 79%, rgba(204, 204, 204, 0) 100%)
    }

    div.ruby-grid.ruby-grid-lined>div.ruby-row>div[class^="ruby-col"]:last-child:after {
      width: 0
    }

    div.ruby-grid img {
      position: relative;
      max-width: 55px;
      height: auto;
      display: block
    }

    h3.ruby-list-heading {
      font-size: 14px;
      line-height: 24px;
      font-weight: 700;
      margin: 0
    }

    ul.ruby-menu>li.ruby-menu-mega>div ul,
    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div ul {
      margin: 0;
      margin-top: 10px
    }

    ul.ruby-menu>li.ruby-menu-mega>div ul li,
    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div ul>li {
      position: relative;
      font-size: 14px;
      line-height: 28px;
      display: block;
      width: 100%;
      margin-bottom: 5px;
    }

    ul.ruby-menu>li.ruby-menu-mega>div ul li>a,
    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div ul>li>a {
      text-decoration: none;
      color: #555;
      display: flex;
      align-items: center;
      gap: 20px;

    }

    ul.ruby-menu>li.ruby-menu-mega>div ul li>a:hover,
    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div ul>li>a:hover {
      color: #9a1a18;
      text-decoration: underline
    }

    ul.ruby-menu>li.ruby-menu-mega>div ul li .fa,
    ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div ul>li .fa {
      position: relative;
      width: 24px
    }

    ul.ruby-menu>li.ruby-menu-mega>div ul.ruby-list-with-images li {
      height: 50px
    }

    ul.ruby-menu>li.ruby-menu-mega>div ul.ruby-list-with-images li span.ruby-list-desc {
      font-size: 11px;
      display: block;
      position: absolute;
      top: 16px;
      left: 72px;
      color: #999
    }

    ul.ruby-menu>li.ruby-menu-mega>div ul li>a>img {
      float: left;
      width: 60px;
      margin-right: 12px
    }

    span.ruby-c-title,
    span.ruby-c-category,
    span.ruby-c-date {
      position: relative;
      display: block
    }

    span.ruby-c-title a,
    span.ruby-c-category a,
    span.ruby-c-date a {
      text-decoration: none
    }

    span.ruby-c-title,
    span.ruby-c-title a {
      font-size: 14px;
      font-weight: 700;
      text-transform: capitalize;
      line-height: 20px;
      margin-top: -5px;
      color: #222
    }

    span.ruby-c-title a:hover {
      color: #444;
      text-decoration: underline
    }

    span.ruby-c-category,
    span.ruby-c-category a {
      font-size: 11px;
      margin: 9px 0;
      color: #444
    }

    span.ruby-c-date,
    span.ruby-c-date a {
      font-size: 11px;
      color: #444
    }

    span.ruby-c-category a:hover,
    span.ruby-c-date a:hover {
      color: #9a1a18
    }

    div.ruby-c-inline {
      display: block;
      position: relative;
      height: 14px;
      margin: 7px 0
    }

    div.ruby-c-inline span.ruby-c-category,
    div.ruby-c-inline span.ruby-c-date {
      position: absolute;
      display: inline-block
    }

    div.ruby-c-inline span.ruby-c-date {
      right: 0
    }

    div.ruby-c-inline span.ruby-c-category,
    div.ruby-c-inline span.ruby-c-category a {
      margin: 0
    }

    span.ruby-c-content {
      display: block;
      position: relative;
      top: 7px;
      font-size: 12px;
      line-height: 18px;
      text-align: justify
    }

    .ruby-wrapper .visible-xs {
      visibility: hidden;
      position: absolute
    }

    @media(min-width: 768px) {
      div.ruby-wrapper.ruby-menu-transparent {
        background: none
      }

      div.ruby-wrapper.ruby-menu-transparent>ul.ruby-menu>li.ruby-active-menu-item>a {
        background: none
      }

      div.ruby-wrapper.ruby-menu-transparent>ul.ruby-menu>li.ruby-menu-social>a {
        border: none
      }

      div.ruby-wrapper.ruby-menu-transparent>ul.ruby-menu.ruby-menu-dividers>li>a {
        border: none
      }

      div.ruby-wrapper.ruby-menu-transparent>ul.ruby-menu>li:hover>a,
      div.ruby-wrapper.ruby-menu-transparent>ul.ruby-menu>li>a:hover,
      div.ruby-wrapper.ruby-menu-transparent>ul.ruby-menu.ruby-menu-dividers>li:hover>a,
      div.ruby-wrapper.ruby-menu-transparent>ul.ruby-menu.ruby-menu-dividers>li>a:hover {
        background: none;
        color: #e2e2e2
      }

      div.ruby-wrapper.ruby-menu-transparent>ul.ruby-menu>li.ruby-menu-social.ruby-menu-search>a:hover,
      div.ruby-wrapper.ruby-menu-transparent>ul.ruby-menu>li.ruby-menu-social.ruby-menu-search:hover>a {
        background: none
      }

      div.ruby-wrapper.ruby-menu-full-width {
        width: 100%
      }

      div.ruby-wrapper.ruby-menu-full-width>ul.ruby-menu {
        width: 980px;
        margin: 0 auto
      }

      ul.ruby-menu>li>ul,
      ul.ruby-menu>li>ul>li>ul,
      ul.ruby-menu>li>ul>li>ul>li>ul {
        visibility: hidden;
        opacity: 0
      }

      ul.ruby-menu>li:hover>ul,
      ul.ruby-menu>li>ul>li:hover>ul,
      ul.ruby-menu>li>ul>li>ul>li:hover>ul {
        visibility: visible;
        opacity: 1
      }

      ul.ruby-menu>li.ruby-menu-mega>div,
      ul.ruby-menu>li.ruby-menu-mega-blog>div,
      ul.ruby-menu>li.ruby-menu-mega-shop>div {
        visibility: hidden;
        opacity: 0
      }

      ul.ruby-menu>li.ruby-menu-mega:hover>div,
      ul.ruby-menu>li.ruby-menu-mega-blog:hover>div,
      ul.ruby-menu>li.ruby-menu-mega-shop:hover>div {
        visibility: visible;
        opacity: 1
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>div {
        visibility: hidden;
        opacity: 0
      }

      ul.ruby-menu>li.ruby-menu-mega-blog:hover>div>ul.ruby-menu-mega-blog-nav>li.ruby-active-menu-item>div {
        visibility: visible;
        opacity: 1
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li:hover>div {
        visibility: visible;
        opacity: 1;
        z-index: 101
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div {
        visibility: hidden;
        opacity: 0
      }

      ul.ruby-menu>li.ruby-menu-mega-shop:hover>div>ul>li.ruby-active-menu-item>div,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li:hover>div {
        visibility: visible;
        opacity: 1
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:before,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:after {
        height: 1px;
        position: absolute;
        content: '';
        background-color: #9a1a18;
        width: 0
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:before {
        top: 10px;
        left: 5%
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:after {
        bottom: 10px;
        right: 5%
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:hover,
      .snip1217 .current a {
        color: #333
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:hover:before,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li.ruby-active-menu-item>a:before,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:hover:after,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li.ruby-active-menu-item>a:after,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li:hover>a:before,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li:hover>a:after {
        width: 90%
      }

      ul.ruby-menu>li>a:after {
        font-family: "FontAwesome";
        text-decoration: none;
        content: '\f107';
        position: absolute;
        margin-left: 5px
      }

      ul.ruby-menu>li:hover>a:after {
        -webkit-transform: rotate(-180deg);
        -moz-transform: rotate(-180deg);
        -o-transform: rotate(-180deg);
        -ms-transform: rotate(-180deg);
        transform: rotate(-180deg)
      }

      ul.ruby-menu>li>ul>li>a:after,
      ul.ruby-menu>li>ul>li>ul>li>a:after,
      ul.ruby-menu>li>ul>li>ul>li>ul>li>a:after {
        font-family: "FontAwesome";
        text-decoration: none;
        font-size: 16px;
        padding: 0;
        content: '\f105';
        position: absolute;
        right: 15px
      }

      ul.ruby-menu>li>ul>li:hover>a:after,
      ul.ruby-menu>li>ul>li>ul>li:hover>a:after,
      ul.ruby-menu>li>ul>li>ul>li>ul>li:hover>a:after {
        -webkit-transform: rotate(-180deg);
        -moz-transform: rotate(-180deg);
        -o-transform: rotate(-180deg);
        -ms-transform: rotate(-180deg);
        transform: rotate(-180deg)
      }

      ul.ruby-menu>li>ul>li.ruby-open-to-left>a:after,
      ul.ruby-menu>li>ul>li>ul>li.ruby-open-to-left>a:after,
      ul.ruby-menu>li>ul>li>ul>li>ul>li.ruby-open-to-left>a:after {
        content: '\f104';
        right: auto;
        left: 10px
      }

      ul.ruby-menu>li>ul>li.ruby-open-to-left:hover>a:after,
      ul.ruby-menu>li>ul>li>ul>li.ruby-open-to-left:hover>a:after,
      ul.ruby-menu>li>ul>li>ul>li>ul>li.ruby-open-to-left:hover>a:after {
        -webkit-transform: rotate(-180deg);
        -moz-transform: rotate(-180deg);
        -o-transform: rotate(-180deg);
        -ms-transform: rotate(-180deg);
        transform: rotate(-180deg)
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li.ruby-active-menu-item>a:after,
      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li:hover>a:after {
        content: "";
        position: absolute;
        right: 0;
        margin-top: 13px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 6px 8px 6px 0;
        border-color: transparent #fff transparent transparent
      }
    }

    /* responsive */

    @media(max-width: 767px) {
      div.ruby-wrapper .hidden-xs {
        visibility: hidden;
        display: none
      }

      div.ruby-wrapper {
        position: absolute;
        width: 100%;
        top: 0;
        background: #111
      }

      .ruby-wrapper .visible-xs {
        visibility: visible;
        position: absolute;
        left: 0;
        top: 0
      }

      div.ruby-wrapper>ul {
        position: absolute;
        top: 50px;
        width: 100%
      }

      ul.ruby-menu>li,
      ul.ruby-menu>li.ruby-menu-right {
        float: none
      }

      ul.ruby-menu>li>a {
        padding: 0 65px;
        background: #9a1a18
      }

      ul.ruby-menu>li>a:only-child {
        padding: 0 65px
      }

      ul.ruby-menu>li>a:hover,
      ul.ruby-menu>li:hover>a,
      ul.ruby-menu>li.ruby-active-menu-item>a:hover {
        background: #127e61
      }

      ul.ruby-menu>li.ruby-active-menu-item>a {
        background: #159572
      }

      ul.ruby-menu>li.ruby-menu-social>a>span {
        display: block
      }

      ul.ruby-menu>li>ul,
      ul.ruby-menu>li>ul>li>ul,
      ul.ruby-menu>li>ul>li>ul>li>ul {
        position: relative;
        width: 100%;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        border-top: none
      }

      ul.ruby-menu>li,
      ul.ruby-menu>li>ul>li,
      ul.ruby-menu>li>ul>li>ul>li,
      ul.ruby-menu>li>ul>li>ul>li>ul>li {
        position: relative
      }

      ul.ruby-menu>li>ul>li>a,
      ul.ruby-menu>li>ul>li>ul>li>a,
      ul.ruby-menu>li>ul>li>ul>li>ul>li>a {
        width: 100%;
        line-height: 50px;
        padding: 0 80px;
        background: #d1d1d1
      }

      ul.ruby-menu>li>ul>li:hover>a,
      ul.ruby-menu>li>ul>li>a:hover,
      ul.ruby-menu>li>ul>li>ul>li:hover>a,
      ul.ruby-menu>li>ul>li>ul>li>a:hover,
      ul.ruby-menu>li>ul>li>ul>li>ul>li:hover>a,
      ul.ruby-menu>li>ul>li>ul>li>ul>li>a:hover {
        background: #d9d9d9;
        color: #111
      }

      ul.ruby-menu>li>ul>li>ul,
      ul.ruby-menu>li>ul>li>ul>li>ul {
        left: auto;
        top: auto;
        z-index: auto
      }

      ul.ruby-menu>li>ul>li.ruby-open-to-left>ul,
      ul.ruby-menu>li>ul>li>ul>li.ruby-open-to-left>ul {
        left: auto;
        right: auto
      }

      ul.ruby-menu>li>ul>li>ul>li>a {
        background: #e5e5e5;
        padding: 0 95px
      }

      ul.ruby-menu>li>ul>li>ul>li:hover>a,
      ul.ruby-menu>li>ul>li>ul>li>a:hover {
        background: #e1e1e1
      }

      ul.ruby-menu>li>ul>li>ul>li>ul>li>a {
        background: #efefef;
        padding: 0 110px
      }

      ul.ruby-menu>li>ul>li>ul>li>ul>li:hover>a,
      ul.ruby-menu>li>ul>li>ul>li>ul>li>a:hover {
        background: #fff
      }

      ul.ruby-menu>li.ruby-menu-social>a {
        border: none
      }

      ul.ruby-menu>li.ruby-menu-mega,
      ul.ruby-menu>li.ruby-menu-mega-blog,
      ul.ruby-menu>li.ruby-menu-mega-shop {
        position: relative
      }

      ul.ruby-menu>li.ruby-menu-mega>div,
      ul.ruby-menu>li.ruby-menu-mega-blog>div,
      ul.ruby-menu>li.ruby-menu-mega-shop>div {
        position: relative;
        top: auto;
        left: auto;
        border-top: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav {
        width: 100%;
        height: auto;
        left: auto;
        top: auto
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li {
        position: relative
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>a {
        line-height: 50px;
        padding: 0 75px;
        background: #d1d1d1;
        color: #222
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li.ruby-active-menu-item>a {
        background: #bcbcbc
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>div {
        position: relative;
        width: 100%;
        min-height: auto;
        left: auto;
        top: auto;
        z-index: auto
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li:hover>a {
        background: #d9d9d9
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div {
        position: relative;
        text-align: left
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul {
        position: relative;
        border: none;
        font-size: 14px;
        margin-bottom: -1px
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li {
        position: relative;
        display: block;
        margin-top: -1px
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a {
        padding: 0 80px;
        line-height: 50px;
        max-height: 50px;
        text-transform: none;
        font-weight: 400;
        background: #d1d1d1;
        color: #222;
        border: none
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li.ruby-active-menu-item>a {
        background: #bcbcbc
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li:hover>a,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:hover,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li.ruby-active-menu-item>a {
        background: #d9d9d9
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a {
        display: block
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div {
        position: relative;
        top: 0;
        z-index: 9999;
        margin: 0
      }

      ul.ruby-menu>li.ruby-menu-social img {
        display: inline-table;
        position: absolute;
        top: 15px
      }

      ul.ruby-menu>li.ruby-menu-social>a {
        width: 100%
      }

      ul.ruby-menu>li.ruby-menu-social .fa {
        position: absolute;
        top: 17px
      }

      ul.ruby-menu>li.ruby-menu-social span {
        line-height: 50px;
        padding: 0 25px
      }

      span.ruby-dropdown-toggle {
        position: absolute;
        width: 50px;
        height: 50px;
        max-width: 50px;
        max-height: 50px;
        left: 0;
        top: 0;
        padding: 10px 17px;
        z-index: 1000000;
        cursor: pointer
      }

      span.ruby-dropdown-toggle:after {
        font-family: "FontAwesome";
        text-decoration: none;
        content: '\f107';
        color: #fff;
        font-size: 25px;
        right: 0
      }

      span.ruby-dropdown-toggle.ruby-dropdown-toggle-rotate {
        -webkit-transform: rotate(180deg);
        -moz-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg)
      }

      ul.ruby-menu>li>a:before,
      ul.ruby-menu>li>ul>li>a:before,
      ul.ruby-menu>li>ul>li>ul>li>a:before,
      ul.ruby-menu>li>ul>li>ul>li>ul>li>a:before,
      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>a:before,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:before {
        content: "";
        width: 50px;
        height: 50px;
        background: #333;
        position: absolute;
        left: 0;
        top: 0
      }

      ul.ruby-menu>li>ul>li>a:before,
      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>a:before,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a:before {
        background: #555
      }

      ul.ruby-menu>li>ul>li>ul>li>a:before {
        background: #777
      }

      ul.ruby-menu>li>ul>li>ul>li>ul>li>a:before {
        background: #999
      }

      ul.ruby-menu>li>ul>li>ul>li>ul,
      ul.ruby-menu>li>ul>li>ul,
      ul.ruby-menu>li>ul,
      ul.ruby-menu,
      ul.ruby-menu>li.ruby-menu-mega>div,
      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>div,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div,
      ul.ruby-menu>li.ruby-menu-mega-blog>div,
      ul.ruby-menu>li.ruby-menu-mega-shop>div {
        max-height: 0;
        transform: scaleY(0);
        overflow: hidden
      }

      ul.ruby-menu>li>ul.ruby-mobile-sublevel-show,
      ul.ruby-menu>li>ul>li>ul.ruby-mobile-sublevel-show,
      ul.ruby-menu>li>ul>li>ul>li>ul.ruby-mobile-sublevel-show,
      ul.ruby-menu.ruby-mobile-sublevel-show,
      ul.ruby-menu>li.ruby-menu-mega>div.ruby-mobile-sublevel-show,
      ul.ruby-menu>li.ruby-menu-mega-blog>div.ruby-mobile-sublevel-show,
      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>div.ruby-mobile-sublevel-show,
      ul.ruby-menu>li.ruby-menu-mega-shop>div.ruby-mobile-sublevel-show,
      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>div.ruby-mobile-sublevel-show {
        max-height: 20000px;
        transform: scaleY(1)
      }

      div.ruby-grid>div.ruby-row div.ruby-row [class^="ruby-col"] {
        margin-top: 0
      }

      div.ruby-grid>div.ruby-row div.ruby-row:first-of-type [class^="ruby-col"] {
        margin-top: 0
      }

      div.ruby-grid.ruby-grid-lined>div.ruby-row:after {
        height: 0
      }

      div.ruby-grid>div.ruby-row>[class^="ruby-col"] {
        padding: 0
      }

      div.ruby-grid>div.ruby-row>[class^="ruby-col"] [class^="ruby-col"] {
        padding-left: 0
      }

      div.ruby-grid>div.ruby-row>[class^="ruby-col"] [class^="ruby-col"]:first-of-type {
        padding-left: 0
      }

      div.ruby-grid>div.ruby-row div.ruby-col-1,
      div.ruby-grid>div.ruby-row div.ruby-col-2,
      div.ruby-grid>div.ruby-row div.ruby-col-3,
      div.ruby-grid>div.ruby-row div.ruby-col-4,
      div.ruby-grid>div.ruby-row div.ruby-col-5,
      div.ruby-grid>div.ruby-row div.ruby-col-6,
      div.ruby-grid>div.ruby-row div.ruby-col-7,
      div.ruby-grid>div.ruby-row div.ruby-col-8,
      div.ruby-grid>div.ruby-row div.ruby-col-9,
      div.ruby-grid>div.ruby-row div.ruby-col-10,
      div.ruby-grid>div.ruby-row div.ruby-col-11,
      div.ruby-grid>div.ruby-row div.ruby-col-12 {
        width: 100%;
        padding: 20px 30px
      }

      div.ruby-grid.ruby-grid-lined>div.ruby-row>div[class^="ruby-col"]:after {
        width: 0
      }

      div.ruby-grid img {
        position: relative;
        max-width: 100%;
        height: auto;
        display: block
      }

      div.ruby-grid>div.ruby-row::after {
        content: "";
        display: table;
        clear: both
      }

      .c-hamburger {
        display: block;
        position: relative;
        overflow: hidden;
        margin: 0;
        padding: 0;
        width: 50px;
        height: 50px;
        font-size: 0;
        text-indent: -9999px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        box-shadow: none;
        border-radius: none;
        border: none;
        cursor: pointer;
        -webkit-transition: background .3s;
        transition: background .3s
      }

      .c-hamburger:focus {
        outline: none
      }

      .c-hamburger span {
        display: block;
        position: absolute;
        top: 24px;
        left: 8px;
        right: 8px;
        height: 3px;
        background: #fff
      }

      .c-hamburger span::before,
      .c-hamburger span::after {
        position: absolute;
        display: block;
        left: 0;
        width: 100%;
        height: 3px;
        background-color: #fff;
        content: ""
      }

      .c-hamburger span::before {
        top: -10px
      }

      .c-hamburger span::after {
        bottom: -10px
      }

      .c-hamburger--htx {
        background-color: #9a1a18
      }

      .c-hamburger--htx span {
        -webkit-transition: background 0 .3s;
        transition: background 0 .3s
      }

      .c-hamburger--htx span::before,
      .c-hamburger--htx span::after {
        -webkit-transition-duration: 0.3s, .3s;
        transition-duration: 0.3s, .3s;
        -webkit-transition-delay: 0.3s, 0;
        transition-delay: 0.3s, 0
      }

      .c-hamburger--htx span::before {
        -webkit-transition-property: top, -webkit-transform;
        transition-property: top, transform
      }

      .c-hamburger--htx span::after {
        -webkit-transition-property: bottom, -webkit-transform;
        transition-property: bottom, transform
      }

      .c-hamburger--htx.is-active {
        background-color: #333
      }

      .c-hamburger--htx.is-active span {
        background: none
      }

      .c-hamburger--htx.is-active span::before {
        top: 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg)
      }

      .c-hamburger--htx.is-active span::after {
        bottom: 0;
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg)
      }

      .c-hamburger--htx.is-active span::before,
      .c-hamburger--htx.is-active span::after {
        -webkit-transition-delay: 0s, .3s;
        transition-delay: 0s, .3s
      }

      ul.ruby-menu.ruby-menu-dividers>li,
      ul.ruby-menu.ruby-menu-dividers>li>a,
      ul.ruby-menu.ruby-menu-dividers>li.ruby-menu-social>a,
      ul.ruby-menu.ruby-menu-dividers>li>a:hover,
      ul.ruby-menu.ruby-menu-dividers>li:hover>a {
        border: none
      }

      div.ruby-wrapper.ruby-menu-transparent>ul.ruby-menu>li.ruby-active-menu-item>a {
        padding-left: 45px
      }

      ul.ruby-menu>li.ruby-menu-social.ruby-menu-search>a {
        display: none
      }
    }

    @media(min-width: 768px) and (max-width:991px) {
      .ruby-wrapper .hidden-md {
        visibility: hidden;
        display: none
      }

      div.ruby-wrapper {
        width: 760px
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav {
        width: 170px
      }

      ul.ruby-menu>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>div {
        width: 590px;
        left: 170px
      }

      ul.ruby-menu.ruby-vertical>li.ruby-menu-mega>div,
      ul.ruby-menu.ruby-vertical>li.ruby-menu-mega-blog>div,
      ul.ruby-menu.ruby-vertical>li.ruby-menu-mega-shop>div {
        width: 560px
      }

      ul.ruby-menu.ruby-vertical>li.ruby-menu-mega-blog>div>ul.ruby-menu-mega-blog-nav>li>div {
        width: 360px
      }

      span.ruby-c-date {
        display: none;
        visibility: hidden;
        opacity: 0
      }

      div.ruby-grid>div.ruby-row div.ruby-col-3-md {
        width: 25%
      }

      div.ruby-grid>div.ruby-row div.ruby-col-4-md {
        width: 33.33%
      }

      div.ruby-grid>div.ruby-row div.ruby-col-6-md {
        width: 50%
      }

      div.ruby-grid>div.ruby-row div.ruby-col-12-md {
        width: 100%
      }

      div.ruby-grid.ruby-grid-lined>div.ruby-row:after,
      div.ruby-grid.ruby-grid-lined>div.ruby-row>div[class^="ruby-col"]:after {
        background: none
      }

      ul.ruby-menu>li.ruby-menu-mega-shop>div>ul>li>a {
        padding: 20px 5px;
        font-size: 12px;
        font-stretch: condensed;
        color: #666
      }
    }
  </style>
</head>

<body>
  <header>  
  <div class="header__middle">
    <div class="container">
      <div class="header__toparea">
        <div class="logo">
          <a href="index ">
            <img src="assets/img/logo.png" class="logo-one" alt="Logo">
          </a>
        </div>
        <div class="info">
          <ul>
            <li>
              <div class="thumb">
                <i class="fa fa-phone" aria-hidden="true"></i>

              </div>
              <div class="text">
                <span>Call us</span>
                <a href="tel:+(866)-485-0088"> (866)-485-0088</a>
              </div>
            </li>
            <li>
              <div class="thumb">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>

              </div>
              <div class="text">
                <span>Email address</span>
                <a href="mailto:sales@aspireglobus.com">sales@aspireglobus.com</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="ruby-menu-demo-header">
    <!-- START: RUBY HORIZONTAL MENU -->
    <div class="ruby-wrapper">
      <div class="container">
        <button class="c-hamburger c-hamburger--htx visible-xs">
          <span>toggle menu</span>
        </button>
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <ul class="ruby-menu">
              <li class="ruby-active-menu-item"><a href="#">Home</a></li>
              <!-- <li><a href="#">Classic</a>
                <ul class="">
                  <li><a href="#">2nd Level #1</a></li>
                  <li><a href="#">2nd Level #2</a></li>
                  <li><a href="#">2nd Level #3</a>
                    <ul>
                      <li><a href="#"><i class="fa fa-university" aria-hidden="true"></i>3rd Level #1</a>
                        <ul>
                          <li><a href="#">4th Level #1</a></li>
                          <li><a href="#">4th Level #2</a></li>
                        </ul>
                        <span class="ruby-dropdown-toggle"></span>
                      </li>
                      <li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>3rd Level #2</a></li>
                      <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i>3rd Level #3</a>
                        <ul>
                          <li><a href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i>4th Level #1</a></li>
                          <li><a href="#"><i class="fa fa-print" aria-hidden="true"></i>4th Level #2</a></li>
                          <li><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i>4th Level #3</a></li>
                        </ul>
                        <span class="ruby-dropdown-toggle"></span>
                      </li>
                    </ul>
                    <span class="ruby-dropdown-toggle"></span>
                  </li>
                  <li class="ruby-open-to-left"><a href="#">2nd Level #4</a>
                    <ul>
                      <li><a href="#">3rd Level #1</a></li>
                      <li><a href="#">3rd Level #2</a></li>
                      <li><a href="#">3rd Level #3</a></li>
                    </ul>
                    <span class="ruby-dropdown-toggle"></span>
                  </li>
                  <li><a href="#">2nd Level #5</a></li>
                </ul>
                <span class="ruby-dropdown-toggle"></span>
              </li> -->

              <li class="ruby-menu-mega"><a href="#">About</a>
                <div class="ruby-grid ruby-grid-lined">
                  <div class="ruby-row">
                    <div class="ruby-col-4">
                      <ul>
                        <li><a href="#"><img src="assets/images/Custom-icon/Underwriting Services.png">Corporate
                            Overview</a></li>
                        <li><a href="#"><img src="assets/images/Custom-icon/Policy Maintenance.png">Why Us</a></li>
                        <li><a href="#"><img src="assets/images/Custom-icon/New Business.png">Leadership Team</a></li>
                      </ul>
                    </div>
                    <div class="ruby-col-4">
                      <ul>
                        <li><a href="#"><img src="assets/images/Custom-icon/Claim.png">Career</a></li>
                        <li><a href="#"><img src="assets/images/Custom-icon/Commission.png">Contact</a></li>
                        <li><a href="#"><img src="assets/images/Custom-icon/insurance data entry.png">Get a Quote</a>
                        </li>
                      </ul>
                    </div>
                    <div class="ruby-col-4">
                      <img src="http://brienlabs.com/ruby-mega-menu/img/travel-1.jpg" class="blog-img-custom">
                      <div class="ruby-c-inline">
                        <span class="ruby-c-category"><a href="#">News / Travel</a></span>
                        <span class="ruby-c-date"><a href="#">05/01/2017</a></span>
                      </div>
                      <span class="ruby-c-title ruby-margin-10"><a href="#">Vacation Proved To Increase
                          Productivity</a></span>
                      <span class="ruby-c-content">The primary research for the study was based on an online
                        survey the study was based on an online the study was based on an online the study was based on
                        an online
                        that was...</span>
                      <br>
                      <a href="">Read More</a>
                    </div>
                  </div>
                </div>
                <span class="ruby-dropdown-toggle"></span>
              </li>

              <li class="ruby-menu-mega-blog"><a href="#">Insights</a>
                <div style="height: 269.359px;" class="">
                  <ul class="ruby-menu-mega-blog-nav">

                    <li class="ruby-active-menu-item"><a href="#">Blogs
                      </a>
                      <div class="ruby-grid ruby-grid-lined" style="height: 264.359px;">
                        <div class="ruby-row">
                          <div class="ruby-col-3">
                            <img src="http://brienlabs.com/ruby-mega-menu/img/travel-1.jpg">
                            <div class="ruby-c-inline">
                              <span class="ruby-c-category"><a href="#">News / Travel</a></span>
                              <span class="ruby-c-date"><a href="#">05/01/2017</a></span>
                            </div>
                            <span class="ruby-c-title ruby-margin-10"><a href="#">Vacation Proved To Increase
                                Productivity</a></span>
                            <span class="ruby-c-content">The primary research for the study was based on an online
                              survey
                              that was...</span>
                          </div>
                          <div class="ruby-col-3">
                            <img src="http://brienlabs.com/ruby-mega-menu/img/health-3.jpg">
                            <div class="ruby-c-inline">
                              <span class="ruby-c-category"><a href="#">News / Health</a></span>
                              <span class="ruby-c-date"><a href="#">05/01/2017</a></span>
                            </div>
                            <span class="ruby-c-title ruby-margin-10"><a href="#">Stereotype Idioms By The
                                Smokers</a></span>
                            <span class="ruby-c-content">If you have ever said some of below idioms you are for sure a
                              smoking...</span>
                          </div>
                          <div class="ruby-col-3">
                            <img src="http://brienlabs.com/ruby-mega-menu/img/culture-2.jpg">
                            <div class="ruby-c-inline">
                              <span class="ruby-c-category"><a href="#">News / Culture</a></span>
                              <span class="ruby-c-date"><a href="#">05/01/2017</a></span>
                            </div>
                            <span class="ruby-c-title ruby-margin-10"><a href="#">10 Facts About The
                                Philosophers</a></span>
                            <span class="ruby-c-content">When we think “philosopher,” a certain image comes to mind—most
                              often a wise...</span>
                          </div>
                          <div class="ruby-col-3">
                            <img src="http://brienlabs.com/ruby-mega-menu/img/health-2.jpg">
                            <div class="ruby-c-inline">
                              <span class="ruby-c-category"><a href="#">News / Tech</a></span>
                              <span class="ruby-c-date"><a href="#">05/01/2017</a></span>
                            </div>
                            <span class="ruby-c-title ruby-margin-10"><a href="#">In 2016, 10 People Died While Taking
                                Selfie</a></span>
                            <span class="ruby-c-content">This is a list of serious injuries and deaths in which the
                              victim
                              or a member of...</span>
                          </div>
                        </div>
                      </div>
                      <span class="ruby-dropdown-toggle"></span>
                    </li>

                    <li class="hidden-md"><a href="#">Case Studies</a>
                      <div class="ruby-grid ruby-grid-lined" style="height: 264.359px;">
                        <div class="ruby-row">
                          <div class="ruby-col-4">
                            <div class="ruby-col-5">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-1.jpg">
                            </div>
                            <div class="ruby-col-7">
                              <span class="ruby-c-title"><a href="#">An Erupting Volcano And A Meteor</a></span>
                              <span class="ruby-c-category"><a href="#">News / Science</a></span>
                              <span class="ruby-c-date"><a href="#">05/01/2017</a></span>
                            </div>
                          </div>
                          <div class="ruby-col-4">
                            <div class="ruby-col-5">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-2.jpg">
                            </div>
                            <div class="ruby-col-7">
                              <span class="ruby-c-title"><a href="#">Bottle Labels: Short Stories To Read</a></span>
                              <span class="ruby-c-category"><a href="#">News / Culture</a></span>
                              <span class="ruby-c-date"><a href="#">05/01/2017</a></span>
                            </div>
                          </div>
                          <div class="ruby-col-4">
                            <div class="ruby-col-5">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-3.jpg">
                            </div>
                            <div class="ruby-col-7">
                              <span class="ruby-c-title"><a href="#">10+ Stunning Animal Portraits By
                                  Polyushko</a></span>
                              <span class="ruby-c-category"><a href="#">News / Photography</a></span>
                              <span class="ruby-c-date"><a href="#">05/01/2017</a></span>
                            </div>
                          </div>
                        </div>
                        <div class="ruby-row">
                          <div class="ruby-col-4">
                            <div class="ruby-col-5">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-8.jpg">
                            </div>
                            <div class="ruby-col-7">
                              <span class="ruby-c-title"><a href="#">Photographing The Beauty Of Fall</a></span>
                              <span class="ruby-c-category"><a href="#">News / Photography</a></span>
                              <span class="ruby-c-date"><a href="#">05/01/2017</a></span>
                            </div>
                          </div>
                          <div class="ruby-col-4">
                            <div class="ruby-col-5">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-9.jpg">
                            </div>
                            <div class="ruby-col-7">
                              <span class="ruby-c-title"><a href="#">10 Freaking Facts About Being A Pilot</a></span>
                              <span class="ruby-c-category"><a href="#">News / Life</a></span>
                              <span class="ruby-c-date"><a href="#">05/01/2017</a></span>
                            </div>
                          </div>
                          <div class="ruby-col-4">
                            <div class="ruby-col-5">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-10.jpg">
                            </div>
                            <div class="ruby-col-7">
                              <span class="ruby-c-title"><a href="#">Health Benefits Of A Glass Of Whiskey</a></span>
                              <span class="ruby-c-category"><a href="#">News / Health</a></span>
                              <span class="ruby-c-date"><a href="#">05/01/2017</a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="ruby-dropdown-toggle"></span>
                    </li>

                    <li><a href="#">Whitepapers</a>
                      <div class="ruby-grid ruby-grid-lined" style="height: 264.359px;">
                        <div class="ruby-row">
                          <div class="ruby-col-6">
                            <div class="ruby-col-4">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-4.jpg">
                            </div>
                            <div class="ruby-col-8">
                              <span class="ruby-c-title"><a href="#">Nexo Created New Airless Bike Tires That Will Never
                                  Get
                                  Flat</a></span>
                              <div class="ruby-c-inline">
                                <span class="ruby-c-category"><a href="#"><i class="fa fa-tag" aria-hidden="true"></i>
                                    News
                                    / Tech</a></span>
                                <span class="ruby-c-date"><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    05/01/2017</a></span>
                              </div>
                            </div>
                          </div>
                          <div class="ruby-col-6">
                            <div class="ruby-col-4">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-5.jpg">
                            </div>
                            <div class="ruby-col-8">
                              <span class="ruby-c-title"><a href="#">Illustrator Creates Stunning Dresses From Everyday
                                  Objects</a></span>
                              <div class="ruby-c-inline">
                                <span class="ruby-c-category"><a href="#"><i class="fa fa-tag" aria-hidden="true"></i>
                                    News
                                    / Tech</a></span>
                                <span class="ruby-c-date"><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    05/01/2017</a></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="ruby-row">
                          <div class="ruby-col-6">
                            <div class="ruby-col-4">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-6.jpg">
                            </div>
                            <div class="ruby-col-8">
                              <span class="ruby-c-title"><a href="#">Italian Pastry Chef Creates Miniature Worlds With
                                  Desserts</a></span>
                              <div class="ruby-c-inline">
                                <span class="ruby-c-category"><a href="#"><i class="fa fa-tag" aria-hidden="true"></i>
                                    News
                                    / Tech</a></span>
                                <span class="ruby-c-date"><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    05/01/2017</a></span>
                              </div>
                            </div>
                          </div>
                          <div class="ruby-col-6">
                            <div class="ruby-col-4">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-7.jpg">
                            </div>
                            <div class="ruby-col-8">
                              <span class="ruby-c-title"><a href="#">Dogs Brought To The Lavender Gardens To Capture
                                  Their
                                  Joy</a></span>
                              <div class="ruby-c-inline">
                                <span class="ruby-c-category"><a href="#"><i class="fa fa-tag" aria-hidden="true"></i>
                                    News
                                    / Tech</a></span>
                                <span class="ruby-c-date"><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    05/01/2017</a></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="ruby-dropdown-toggle"></span>
                    </li>

                    <li><a href="#">Infographics</a>
                      <div class="ruby-grid ruby-grid-lined" style="height: 264.359px;">
                        <div class="ruby-row">
                          <div class="ruby-col-6">
                            <span class="ruby-c-title" style="margin-bottom:15px">POPULAR THREADS</span>
                            <div class="ruby-row">
                              <div class="ruby-col-1"><img src="img/blog-1.jpg"></div>
                              <div class="ruby-col-11"><span class="ruby-c-title"><a href="#">An Erupting Volcano And A
                                    Meteor Has Created A Fantastic View</a></span></div>
                            </div>
                            <div class="ruby-row">
                              <div class="ruby-col-1"><img src="img/blog-2.jpg"></div>
                              <div class="ruby-col-11"><span class="ruby-c-title"><a href="#">Bottle Labels With Short
                                    Stories To Be Read Is The New Marketing Era</a></span></div>
                            </div>
                            <div class="ruby-row">
                              <div class="ruby-col-1"><img src="img/blog-3.jpg"></div>
                              <div class="ruby-col-11"><span class="ruby-c-title"><a href="#">10+ Stunning Animal
                                    Portraits
                                    That Has Been Filmed By Polyushko</a></span></div>
                            </div>
                            <div class="ruby-row">
                              <div class="ruby-col-1"><img src="img/blog-10.jpg"></div>
                              <div class="ruby-col-11"><span class="ruby-c-title"><a href="#">10 Freaking Facts About
                                    Being
                                    An airline pilot</a></span></div>
                            </div>
                          </div>
                          <div class="ruby-col-6">
                            <span class="ruby-c-title" style="margin-bottom:15px">MOST COMMENTED</span>
                            <div class="ruby-row">
                              <div class="ruby-col-1"><img src="img/blog-1.jpg"></div>
                              <div class="ruby-col-11"><span class="ruby-c-title"><a href="#">An Erupting Volcano And A
                                    Meteor Has Created A Fantastic View</a></span></div>
                            </div>
                            <div class="ruby-row">
                              <div class="ruby-col-1"><img src="img/blog-2.jpg"></div>
                              <div class="ruby-col-11"><span class="ruby-c-title"><a href="#">Bottle Labels With Short
                                    Stories To Be Read Is The New Marketing Era</a></span></div>
                            </div>
                            <div class="ruby-row">
                              <div class="ruby-col-1"><img src="img/blog-3.jpg"></div>
                              <div class="ruby-col-11"><span class="ruby-c-title"><a href="#">10+ Stunning Animal
                                    Portraits
                                    That Has Been Filmed By Polyushko</a></span></div>
                            </div>
                            <div class="ruby-row">
                              <div class="ruby-col-1"><img src="img/blog-10.jpg"></div>
                              <div class="ruby-col-11"><span class="ruby-c-title"><a href="#">10 Freaking Facts About
                                    Being
                                    An airline pilot</a></span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="ruby-dropdown-toggle"></span>
                    </li>
                    <li><a href="#">News (for PR)</a>
                      <div class="ruby-grid ruby-grid-lined" style="height: 264.359px;">
                        <div class="ruby-row">
                          <div class="ruby-col-6">
                            <div class="ruby-col-4">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-4.jpg">
                            </div>
                            <div class="ruby-col-8">
                              <span class="ruby-c-title"><a href="#">Nexo Created New Airless Bike Tires That Will Never
                                  Get
                                  Flat</a></span>
                              <div class="ruby-c-inline">
                                <span class="ruby-c-category"><a href="#"><i class="fa fa-tag" aria-hidden="true"></i>
                                    News
                                    / Tech</a></span>
                                <span class="ruby-c-date"><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    05/01/2017</a></span>
                              </div>
                            </div>
                          </div>
                          <div class="ruby-col-6">
                            <div class="ruby-col-4">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-5.jpg">
                            </div>
                            <div class="ruby-col-8">
                              <span class="ruby-c-title"><a href="#">Illustrator Creates Stunning Dresses From Everyday
                                  Objects</a></span>
                              <div class="ruby-c-inline">
                                <span class="ruby-c-category"><a href="#"><i class="fa fa-tag" aria-hidden="true"></i>
                                    News
                                    / Tech</a></span>
                                <span class="ruby-c-date"><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    05/01/2017</a></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="ruby-row">
                          <div class="ruby-col-6">
                            <div class="ruby-col-4">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-6.jpg">
                            </div>
                            <div class="ruby-col-8">
                              <span class="ruby-c-title"><a href="#">Italian Pastry Chef Creates Miniature Worlds With
                                  Desserts</a></span>
                              <div class="ruby-c-inline">
                                <span class="ruby-c-category"><a href="#"><i class="fa fa-tag" aria-hidden="true"></i>
                                    News
                                    / Tech</a></span>
                                <span class="ruby-c-date"><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    05/01/2017</a></span>
                              </div>
                            </div>
                          </div>
                          <div class="ruby-col-6">
                            <div class="ruby-col-4">
                              <img src="http://brienlabs.com/ruby-mega-menu/img/blog-7.jpg">
                            </div>
                            <div class="ruby-col-8">
                              <span class="ruby-c-title"><a href="#">Dogs Brought To The Lavender Gardens To Capture
                                  Their
                                  Joy</a></span>
                              <div class="ruby-c-inline">
                                <span class="ruby-c-category"><a href="#"><i class="fa fa-tag" aria-hidden="true"></i>
                                    News
                                    / Tech</a></span>
                                <span class="ruby-c-date"><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    05/01/2017</a></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="ruby-dropdown-toggle"></span>
                    </li>
                  </ul>
                </div>
                <span class="ruby-dropdown-toggle"></span>
              </li>

              <li class="ruby-menu-mega-shop"><a href="#">Services</a>
                <div style="height: 263px;" class="">
                  <ul>
                    <li class="ruby-active-menu-item"><a href="#">Finance & Accounting</a>
                      <div class="ruby-grid ruby-grid-lined">
                        <div class="ruby-row">
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/Account Payable Services.png"> Account
                                  Payable Services
                                </a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/Account Receivable Services.png">
                                  Account Receivable Services</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/Bookkeeping.png"> Bookkeeping</a></li>

                            </ul>
                          </div>
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/Tax Preparation.png">Tax
                                  Preparation</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/Reconciliation.png">Reconciliation</a>
                              </li>
                              <li><a href="#"><img src="assets/images/Custom-icon/Payroll.png">Payroll</a></li>
                            </ul>
                          </div>
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/finance reporting.png">Financial
                                  Reporting</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <span class="ruby-dropdown-toggle"></span>
                    </li>
                    <li><a href="#">Insurance BPO</a>
                      <div class="ruby-grid ruby-grid-lined">
                        <div class="ruby-row">
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img
                                    src="assets/images/Custom-icon/Underwriting Services.png">Underwriting Support</a>
                              </li>
                              <li><a href="#"><img src="assets/images/Custom-icon/Policy Maintenance.png">Policy
                                  Maintenance</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/New Business.png">New Business
                                  Services</a></li>
                            </ul>
                          </div>
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/Claim.png">Claim Management</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/Commission.png">Commission
                                  management</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/insurance data entry.png">Insurance
                                  Data Entry</a></li>
                            </ul>
                          </div>
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/Insurance Reporting.png">Insurance
                                  Reporting</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <span class="ruby-dropdown-toggle"></span>
                    </li>
                    <li><a href="#">Data Management</a>
                      <div class="ruby-grid ruby-grid-lined">
                        <div class="ruby-row">
                          <div class="ruby-col-3">
                            <h3 class="ruby-list-heading">Data Management</h3>
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/data entry.png">Data Entry</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/Data Processing.png">Data
                                  Processing</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/data analytics.png">Data Analytics</a>
                              </li>

                            </ul>
                          </div>
                          <div class="ruby-col-3">
                            <ul>
                              <li><a href="#"><img
                                    src="assets/images/Custom-icon/Data Catalog Management Forms processing.png">Data
                                  Catalog Management</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/forms prossing.png">Forms
                                  processing</a></li>
                            </ul>
                          </div>
                          <div class="ruby-col-3">
                            <h3 class="ruby-list-heading">Data Entry</h3>
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/e com data.png">E-com data entry</a>
                              </li>
                              <li><a href="#"><img src="assets/images/Custom-icon/real estate.png">Real estate</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/restaurant.png">Restaurant
                                </a></li>
                            </ul>
                          </div>
                          <div class="ruby-col-3">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/accounting.png">Accounting</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/bill of lading.png">Bill of Lading</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <span class="ruby-dropdown-toggle"></span>
                    </li>
                    <li><a href="#">Technology Solutions</a>
                      <div class="ruby-grid ruby-grid-lined">
                        <div class="ruby-row">
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/application design.png">Application
                                  Design and Development Solutions
                                </a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/cloud management.png">Cloud Management
                                  Services</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/Digital Marketing.png">Digital
                                  Marketing</a></li>

                            </ul>
                          </div>
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/Analytics.png">Analytics</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/Full Stack Development.png">Full Stack
                                  Development</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/CRM Development.png">CRM Development
                                  Services
                                </a></li>

                            </ul>
                          </div>
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/Enterprise Application.png">Enterprise
                                  Application Integration Services
                                </a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <span class="ruby-dropdown-toggle"></span>
                    </li>
                    <li><a href="#">Mortgage Services</a>
                      <div class="ruby-grid ruby-grid-lined">
                        <div class="ruby-row">
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/Mortgage loan processing.png">Mortgage
                                  loan Processing</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/Mortgage loan Appraisa.png">Mortgage
                                  loan Appraisa</a></li>
                            </ul>
                          </div>
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/Mortgage loan Closing.png">Mortgage
                                  loan Closing</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/bill of lading.png">Underwriting
                                  Services</a></li>
                            </ul>
                          </div>
                          <div class="ruby-col-4">
                            <span class="ruby-c-title" style="margin-bottom:15px">POPULAR THREADS</span>
                            <div class="ruby-row">
                              <div class="ruby-col-1"></div>
                              <div class="ruby-col-11"><span class="ruby-c-title"><a href="#">An Erupting Volcano And A
                                    Meteor Has Created A Fantastic View Fantastic View</a></span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="ruby-dropdown-toggle"></span>
                    </li>
                    <li><a href="#">Visa Immigration Services</a>
                      <div class="ruby-grid ruby-grid-lined">
                        <div class="ruby-row">
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/Work Permit.png">Work Permit</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/Green Card.png">Green Card</a></li>
                            </ul>
                          </div>
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/Citizenship.png">Citizenship</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/Passport renew.png">Passport
                                  renewal</a></li>
                            </ul>
                          </div>
                          <div class="ruby-col-4">
                            <ul>
                              <li><a href="#"><img src="assets/images/Custom-icon/Interview.png">Interview
                                  Preparation</a></li>
                              <li><a href="#"><img src="assets/images/Custom-icon/Timely Status Update.png">Timely
                                  Status Update</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <span class="ruby-dropdown-toggle"></span>
                    </li>
                  </ul>
                </div>
                <span class="ruby-dropdown-toggle"></span>
              </li>
              <li class=""><a href="#">Career</a></li>

              <li class="ruby-menu-right ruby-menu-social"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="ruby-menu-right ruby-menu-social"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li class="ruby-menu-right ruby-menu-social"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li class="ruby-menu-right ruby-menu-social"><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>


            </ul>
          </div>
        </div>


      </div>
      <!-- END:   RUBY HORIZONTAL MENU -->
      <!-- ########################### -->

    </div>
  </div>
    <!-- Mobile Menu Starts Here -->
    <nav class="mobile-menu">
      <ul class="pushNav js-topPushNav">
        <li class="closeLevel js-closeLevelTop hdg">
          <i class="bx bx-x"></i>
          Close
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-home"></i>
            Home
          </a>
        </li>
        <li>
          <!-- Begin section 1 -->
          <div class="openLevel js-openLevel">
            About Us
            <i class="bx bx-chevron-right"></i>
          </div>
          <ul class="pushNav pushNav_level js-pushNavLevel">
            <li class="closeLevel js-closeLevel hdg">
              <i class="bx bx-chevron-left"></i>
              Go Back
            </li>
            <li><a href="./corporate-overview ">Corporate Overview </a></li>
            <li><a href="./why-us ">Why us </a></li>
            <li><a href="./leadership-team ">Leadership team </a></li>
          </ul>
        </li>
        <!-- End section 1 -->
        <li>
          <!-- Begin section 1 -->
          <div class="openLevel js-openLevel">
            Services
            <i class="bx bx-chevron-right"></i>
          </div>
          <ul class="pushNav pushNav_level js-pushNavLevel">
            <li class="closeLevel js-closeLevel hdg">
              <i class="bx bx-chevron-left"></i>
              Go Back
            </li>
            <li>
              <div class="openLevel js-openLevel">
                Finance & Accounting
                <i class="bx bx-chevron-right"></i>
              </div>
              <ul class="pushNav pushNav_level js-pushNavLevel">
                <li class="closeLevel js-closeLevel hdg">
                  <i class="bx bx-chevron-left"></i>
                  Go Back
                </li>
                <li><a href="#">Account Payable Services</a></li>
                <li><a href="#">Account Receivable Services</a></li>
                <li><a href="#">Bookkeeping</a></li>
                <li><a href="#">Tax Preparation</a></li>
                <li><a href="#">Reconciliation</a></li>
                <li><a href="#">Payroll</a></li>
                <li><a href="#">Financial Reporting</a></li>
              </ul>
            </li>
            <li>
              <div class="openLevel js-openLevel">
                Call Centre Services
                <i class="bx bx-chevron-right"></i>
              </div>
              <ul class="pushNav pushNav_level js-pushNavLevel">
                <li class="closeLevel js-closeLevel hdg">
                  <i class="bx bx-chevron-left"></i>
                  Go Back
                </li>
                <li><a href="#">Inbound</a></li>
                <li><a href="#">Outbound</a></li>
                <li><a href="#">Order Management </a></li>
                <li><a href="#">Sales and Customer Acquisition </a></li>
                <li><a href="#">Customer care </a></li>
                <li><a href="#">Email Support</a></li>
                <li><a href="#">Live Chat</a></li>
                <li><a href="#">Technical and Help desk</a></li>
              </ul>
            </li>
            <li>
              <div class="openLevel js-openLevel">
                Mortgage Services
                <i class="bx bx-chevron-right"></i>
              </div>
              <ul class="pushNav pushNav_level js-pushNavLevel">
                <li class="closeLevel js-closeLevel hdg">
                  <i class="bx bx-chevron-left"></i>
                  Go Back
                </li>
                <li><a href="#">Mortgage loan Processing</a></li>
                <li><a href="#">Mortgage loan Appraisal </a></li>
                <li><a href="#">Mortgage loan Closing</a></li>
                <li><a href="#">Underwriting Services </a></li>
              </ul>
            </li>
            <li>
              <div class="openLevel js-openLevel">
                Visa Immigration Services
                <i class="bx bx-chevron-right"></i>
              </div>
              <ul class="pushNav pushNav_level js-pushNavLevel">
                <li class="closeLevel js-closeLevel hdg">
                  <i class="bx bx-chevron-left"></i>
                  Go Back
                </li>
                <li><a href="#">Work Permit </a></li>
                <li><a href="#">Green Card</a></li>
                <li><a href="#">Citizenship</a></li>
                <li><a href="#">Passport renewal </a></li>
                <li><a href="#">Interview Preparation</a></li>
                <li><a href="#">Timely Status Update </a></li>
              </ul>
            </li>
            <li><a href="#">Link to page three</a></li>
            <li><a href="#">Link to page four</a></li>
          </ul>
        </li>
        <!-- End section 1 -->

        <hr />

        <li>
          <!-- Begin section 1 -->
          <div class="openLevel js-openLevel">
            Insights
            <i class="bx bx-chevron-right"></i>
          </div>
          <ul class="pushNav pushNav_level js-pushNavLevel">
            <li class="closeLevel js-closeLevel hdg">
              <i class="bx bx-chevron-left"></i>
              Go Back
            </li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Case Studies</a></li>
            <li><a href="#">Whitepapers</a></li>
            <li><a href="#">News ( for PR)</a></li>
          </ul>
        </li>
        <!-- End section 1 -->
        <li>
          <a href="#">Career</a>
        </li>
        <li>
          <a href="#">Contact Us</a>
        </li>
        <li>
          <a href="#">Get a Quote</a>
        </li>
      </ul>
    </nav>
    <!-- Mobile Menu Ends Here -->
    <div class="mobile-header-menu">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-sm-6">
            <div class="logo">
              <a href="index ">
                <img src="assets/img/logo.png" class="logo-one" alt="Logo" />
              </a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="burger js-menuToggle">
              <i class="bx bx-menu"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <script src="./assets/js/common.js"></script>
</body>

</html>