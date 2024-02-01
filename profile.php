<?php 
session_start();
include("dbconnect.php");
?>
<?php 
$user = $_SESSION['semail']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BlogoPedia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600&display=swap" rel="stylesheet">
</head>
<style>
    .input {
        border-radius: 10px;
        outline: 2px solid #FEBF00;
        border: 0;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        background-color: transparent;
        outline-offset: 3px;
        padding: 10px 1rem;
        transition: 0.25s;
    }

    .input:focus {
        outline-offset: 0px;
        background-color: #fff
    }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    header {
        position: sticky;
        z-index: 2;
        top: 1rem;
        padding: 0 2rem;
        margin: 1rem 2rem;
        border-radius: 50px;
        max-width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.8);
    }

    .logo {
        padding-left: 2rem;
        font-family: 'Oswald', sans-serif;
        font-size: 2rem;
        font-weight: 200;
        letter-spacing: 2px;
        color: black;
    }

    .logo span {
        font-weight: 600;
        color: #FEBF00;
    }

    .buttons {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 0;
        gap: 2rem;
        padding: 1rem;
        margin-right: 1rem;
    }

    .search-bar {
        display: flex;
        gap: 1rem;
        justify-content: center;
        align-items: center;
    }
    .nav-link-btn{
        text-decoration: none;
        color: inherit;
    }

    .ui-btn {
        --btn-default-bg: rgb(41, 41, 41);
        --btn-padding: 15px 20px;
        --btn-hover-bg: rgb(51, 51, 51);
        --btn-transition: .3s;
        --btn-letter-spacing: .1rem;
        --btn-animation-duration: 1.2s;
        --btn-shadow-color: rgba(0, 0, 0, 0.137);
        --btn-shadow: 0 2px 10px 0 var(--btn-shadow-color);
        --hover-btn-color: #FAC921;
        --default-btn-color: #fff;
        --font-size: 16px;
        /* 👆 this field should not be empty */
        --font-weight: 600;
        --font-family: Menlo, Roboto Mono, monospace;
        /* 👆 this field should not be empty */
    }

    /* button settings 👆 */

    .ui-btn {
        box-sizing: border-box;
        border-radius: 50px;
        padding: var(--btn-padding);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--default-btn-color);
        font: var(--font-weight) var(--font-size) var(--font-family);
        background: var(--btn-default-bg);
        border: none;
        cursor: pointer;
        transition: var(--btn-transition);
        overflow: hidden;
        box-shadow: var(--btn-shadow);
    }

    .ui-btn span {
        letter-spacing: var(--btn-letter-spacing);
        transition: var(--btn-transition);
        box-sizing: border-box;
        position: relative;
        background: inherit;
    }

    .ui-btn span::before {
        box-sizing: border-box;
        position: absolute;
        content: "";
        background: inherit;
    }

    .ui-btn:hover,
    .ui-btn:focus {
        background: var(--btn-hover-bg);
    }

    .ui-btn:hover span,
    .ui-btn:focus span {
        color: var(--hover-btn-color);
    }

    .ui-btn:hover span::before,
    .ui-btn:focus span::before {
        animation: chitchat linear both var(--btn-animation-duration);
    }

    @keyframes chitchat {
        0% {
            content: "#";
        }

        5% {
            content: ".";
        }

        10% {
            content: "^{";
        }

        15% {
            content: "-!";
        }

        20% {
            content: "#$_";
        }

        25% {
            content: "№:0";
        }

        30% {
            content: "#{+.";
        }

        35% {
            content: "@}-?";
        }

        40% {
            content: "?{4@%";
        }

        45% {
            content: "=.,^!";
        }

        50% {
            content: "?2@%";
        }

        55% {
            content: "\;1}]";
        }

        60% {
            content: "?{%:%";
            right: 0;
        }

        65% {
            content: "|{f[4";
            right: 0;
        }

        70% {
            content: "{4%0%";
            right: 0;
        }

        75% {
            content: "'1_0<";
            right: 0;
        }

        80% {
            content: "{0%";
            right: 0;
        }

        85% {
            content: "]>'";
            right: 0;
        }

        90% {
            content: "4";
            right: 0;
        }

        95% {
            content: "2";
            right: 0;
        }

        100% {
            content: "";
            right: 0;
        }
    }

    .container {
        width: 100%;
        height: 100%;
        --s: 194px;
        --c1: #f6edb3;
        --c2: #acc4a3;

        --_l: #0000 calc(25% / 3), var(--c1) 0 25%, #0000 0;
        --_g: conic-gradient(from 120deg at 50% 87.5%, var(--c1) 120deg, #0000 0);

        background: var(--_g), var(--_g) 0 calc(var(--s) / 2),
            conic-gradient(from 180deg at 75%, var(--c2) 60deg, #0000 0),
            conic-gradient(from 60deg at 75% 75%, var(--c1) 0 60deg, #0000 0),
            linear-gradient(150deg, var(--_l)) 0 calc(var(--s) / 2),
            conic-gradient(at 25% 25%,
                #0000 50%,
                var(--c2) 0 240deg,
                var(--c1) 0 300deg,
                var(--c2) 0),
            linear-gradient(-150deg, var(--_l)) #55897c
            /* third color here */
        ;
        background-size: calc(0.866 * var(--s)) var(--s);
    }

    .content-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 1rem;
        justify-content: center;
        max-width: 100%;
        margin: 4rem 2rem;
        border-radius: 70px;
        padding: 2rem 3rem;
    }

    .like-dislike-container {
        --dark-grey: #353535;
        --middle-grey: #767676;
        --lightest-grey: linear-gradient(#fafafa, #ebebeb);
        --shadow: 0 5px 15px 0 #00000026;
        --shadow-active: 0 5px 5px 0 #00000026;
        --border-radius-main: 10px;
        --border-radius-icon: 50px;
        position: relative;
        display: flex;
        text-align: center;
        flex-direction: column;
        align-items: center;
        cursor: default;
        color: var(--dark-grey);
        opacity: .9;
        margin: auto;
        padding: 1.5rem;
        font-weight: 600;
        background: var(--lightest-grey);
        max-width: max-content;
        border-radius: var(--border-radius-main);
        box-shadow: var(--shadow);
        transition: .2s ease all;
    }

    .like-dislike-container:hover {
        box-shadow: var(--shadow-active);
    }

    .like-dislike-container .tool-box {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.5rem;
        height: 2.5rem;
        top: 0;
        right: 0;
        border-radius: var(--border-radius-main);
    }

    .like-dislike-container .btn-close {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        width: .8rem;
        height: .8rem;
        color: transparent;
        font-size: 0;
        cursor: pointer;
        background-color: #ff000080;
        border: none;
        border-radius: var(--border-radius-main);
        transition: .2s ease all;
    }

    .like-dislike-container .btn-close:hover {
        width: 1rem;
        height: 1rem;
        font-size: 1rem;
        color: #ffffff;
        background-color: #ff0000cc;
        box-shadow: var(--shadow-active);
    }

    .like-dislike-container .btn-close:active {
        width: .9rem;
        height: .9rem;
        font-size: .9rem;
        color: #ffffffde;
        --shadow-btn-close: 0 3px 3px 0 #00000026;
        box-shadow: var(--shadow-btn-close);
    }

    .like-dislike-container .text-content {
        margin-bottom: 1rem;
        font-size: 18px;
        line-height: 1.6;
        cursor: default;
    }

    .like-dislike-container .icons-box {
        display: flex;
    }

    .like-dislike-container .icons {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: .6;
        margin: 0 0.5rem;
        cursor: pointer;
        user-select: none;
        border: 1px solid var(--middle-grey);
        border-radius: var(--border-radius-icon);
        transition: .2s ease all;
    }

    .like-dislike-container .icons:hover {
        opacity: .9;
        box-shadow: var(--shadow);
    }

    .like-dislike-container .icons:active {
        opacity: .9;
        box-shadow: var(--shadow-active);
    }

    .like-dislike-container .icons .btn-label {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 0.5rem;
        cursor: pointer;
        position: relative;
    }

    .like-dislike-container .like-text-content {
        border-right: 0.1rem solid var(--dark-grey);
        padding: 0 0.6rem 0 0.5rem;
        pointer-events: none;
    }

    .like-dislike-container .dislike-text-content {
        border-left: 0.1rem solid var(--dark-grey);
        padding: 0 0.5rem 0 0.6rem;
        pointer-events: none;
    }

    .like-dislike-container .icons .svgs {
        width: 1.3rem;
        fill: #000000;
        box-sizing: content-box;
        padding: 10px 10px;
        transition: .2s ease all;
    }

    /* Hide the default checkbox */
    .like-dislike-container .icons .input-box {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .like-dislike-container .icons #icon-like-regular {
        display: block;
    }

    .like-dislike-container .icons #icon-like-solid {
        display: none;
    }

    .like-dislike-container .icons:hover :is(#icon-like-solid, #icon-like-regular) {
        animation: rotate-icon-like 0.7s ease-in-out both;
    }

    .like-dislike-container .icons #like-checkbox:checked~#icon-like-regular {
        display: none;
        animation: checked-icon-like 0.5s;
    }

    .like-dislike-container .icons #like-checkbox:checked~#icon-like-solid {
        display: block;
        animation: checked-icon-like 0.5s;
    }

    .like-dislike-container .icons #icon-dislike-regular {
        display: block;
        transform: rotate(180deg);
    }

    .like-dislike-container .icons #icon-dislike-solid {
        display: none;
        transform: rotate(180deg);
    }

    .like-dislike-container .icons:hover :is(#icon-dislike-solid, #icon-dislike-regular) {
        animation: rotate-icon-dislike 0.7s ease-in-out both;
    }

    .like-dislike-container .icons #dislike-checkbox:checked~#icon-dislike-regular {
        display: none;
        animation: checked-icon-dislike 0.5s;
    }

    .like-dislike-container .icons #dislike-checkbox:checked~#icon-dislike-solid {
        display: block;
        animation: checked-icon-dislike 0.5s;
    }

    .like-dislike-container .icons .fireworks {
        transform: scale(0.4);
    }

    .like-dislike-container .icons #like-checkbox:checked~.fireworks>.checked-like-fx {
        position: absolute;
        width: 10px;
        height: 10px;
        right: 40px;
        border-radius: 50%;
        box-shadow: 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff;
        animation: 1s fireworks-bang ease-out forwards, 1s fireworks-gravity ease-in forwards, 5s fireworks-position linear forwards;
        animation-duration: 1.25s, 1.25s, 6.25s;
    }

    .like-dislike-container .icons #dislike-checkbox:checked~.fireworks>.checked-dislike-fx {
        position: absolute;
        width: 10px;
        height: 10px;
        left: 40px;
        border-radius: 50%;
        box-shadow: 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff;
        animation: 1s fireworks-bang ease-out forwards, 1s fireworks-gravity ease-in forwards, 5s fireworks-position linear forwards;
        animation-duration: 1.25s, 1.25s, 6.25s;
    }

    /* Shake Animation */
    @keyframes rotate-icon-like {
        0% {
            transform: rotate(0deg) translate3d(0, 0, 0);
        }

        25% {
            transform: rotate(3deg) translate3d(0, 0, 0);
        }

        50% {
            transform: rotate(-3deg) translate3d(0, 0, 0);
        }

        75% {
            transform: rotate(1deg) translate3d(0, 0, 0);
        }

        100% {
            transform: rotate(0deg) translate3d(0, 0, 0);
        }
    }

    @keyframes rotate-icon-dislike {
        0% {
            transform: rotate(180deg) translate3d(0, 0, 0);
        }

        25% {
            transform: rotate(183deg) translate3d(0, 0, 0);
        }

        50% {
            transform: rotate(177deg) translate3d(0, 0, 0);
        }

        75% {
            transform: rotate(181deg) translate3d(0, 0, 0);
        }

        100% {
            transform: rotate(180deg) translate3d(0, 0, 0);
        }
    }

    /* Checked Animation */
    @keyframes checked-icon-like {
        0% {
            transform: scale(0);
            opacity: 0;
        }

        50% {
            transform: scale(1.2) rotate(-10deg);
        }
    }

    @keyframes checked-icon-dislike {
        0% {
            transform: scale(0) rotate(180deg);
            opacity: 0;
        }

        50% {
            transform: scale(1.2) rotate(170deg);
        }
    }

    /* Fireworks Animation */
    @keyframes fireworks-position {

        0%,
        19.9% {
            margin-top: 10%;
            margin-left: 40%;
        }

        20%,
        39.9% {
            margin-top: 40%;
            margin-left: 30%;
        }

        40%,
        59.9% {
            margin-top: 20%;
            margin-left: 70%;
        }

        60%,
        79.9% {
            margin-top: 30%;
            margin-left: 20%;
        }

        80%,
        99.9% {
            margin-top: 30%;
            margin-left: 80%;
        }
    }

    @keyframes fireworks-gravity {
        to {
            transform: translateY(200px);
            opacity: 0;
        }
    }

    @keyframes fireworks-bang {
        to {
            box-shadow: 114px -107.3333333333px #8800ff, 212px -166.3333333333px #a600ff, 197px -6.3333333333px #ff006a, 179px -329.3333333333px #3300ff, -167px -262.3333333333px #ff0062, 233px 65.6666666667px #ff008c, 81px 42.6666666667px #0051ff, -13px 54.6666666667px #00ff2b, -60px -183.3333333333px #0900ff, 127px -259.3333333333px #ff00e6, 117px -122.3333333333px #00b7ff, 95px 20.6666666667px #ff8000, 115px 1.6666666667px #0004ff, -160px -328.3333333333px #00ff40, 69px -242.3333333333px #000dff, -208px -230.3333333333px #ff0400, 30px -15.3333333333px #e6ff00, 235px -15.3333333333px #fb00ff, 80px -232.3333333333px #d5ff00, 175px -173.3333333333px #00ff3c, -187px -176.3333333333px #aaff00, 4px 26.6666666667px #ff6f00, 227px -106.3333333333px #ff0099, 119px 17.6666666667px #00ffd5, -102px 4.6666666667px #ff0088, -16px -4.3333333333px #00fff7, -201px -310.3333333333px #00ffdd, 64px -181.3333333333px #f700ff, -234px -15.3333333333px #00fffb, -184px -263.3333333333px #aa00ff, 96px -303.3333333333px #0037ff, -139px 10.6666666667px #0026ff, 25px -205.3333333333px #00ff2b, -129px -322.3333333333px #40ff00, -235px -187.3333333333px #26ff00, -136px -237.3333333333px #0091ff, -82px -321.3333333333px #6a00ff, 7px -267.3333333333px #ff00c8, -155px 30.6666666667px #0059ff, -85px -73.3333333333px #6a00ff, 60px -199.3333333333px #55ff00, -9px -289.3333333333px #00ffaa, -208px -167.3333333333px #00ff80, -13px -299.3333333333px #ff0004, 179px -164.3333333333px #ff0044, -112px 12.6666666667px #0051ff, -209px -125.3333333333px #ff00bb, 14px -101.3333333333px #00ff95, -184px -292.3333333333px #ff0099, -26px -168.3333333333px #09ff00, 129px -67.3333333333px #0084ff, -17px -23.3333333333px #0059ff, 129px 34.6666666667px #7300ff, 35px -24.3333333333px #ffd900, -12px -297.3333333333px #ff8400, 129px -156.3333333333px #0dff00, 157px -29.3333333333px #1a00ff, -221px 6.6666666667px #ff0062, 0px -311.3333333333px #ff006a, 155px 50.6666666667px #00ffaa, -71px -318.3333333333px #0073ff;
        }
    }

    .input-text {
        color: #000;
        min-height: 150px;
        height: auto;
        border-radius: 50px;
        font-size: 0.9rem;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        letter-spacing: 0.2px;
        background-color: rgba(255, 255, 255, 0.5);
        width: 100%;
        box-sizing: border-box;
        padding-inline: 0.5em;
        padding-block: 0.7em;
        padding: 2rem !important;
        border: none;
        border-bottom: var(--border-height) solid var(--border-before-color);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        resize: none;
        /* Disable resizing */
    }

    .input-border {
        position: absolute;
        background: var(--border-after-color);
        width: 0%;
        height: 2px;
        bottom: 0;
        left: 35px;
        transition: width 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045);
    }

    .input-text:focus {
        outline: none;
    }

    .input-text:focus+.input-border {
        width: 100%;
    }

    .form-control {
        position: relative;
        --width-of-input: 300px;
    }

    .input-alt {
        font-size: 1.2rem;
        padding-inline: 1em;
        padding-block: 0.8em;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 50px;
    }

    .input-border-alt {
        border-radius: 50px;
        height: 3px;
        background: linear-gradient(90deg, #FF6464 0%, #FFBF59 50%, #47C9FF 100%);
        transition: width 0.4s cubic-bezier(0.42, 0, 0.58, 1.00);
    }

    .input-alt:focus+.input-border-alt {
        width: 94%;
    }

    .btn {
        right: 1rem;
        width: 140px;
        height: 50px;
        background: linear-gradient(to top, #FEBF00, #FEBF00, #FAC921);
        color: #000;
        border-radius: 50px;
        border: none;
        outline: none;
        cursor: pointer;
        position: relative;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
        overflow: hidden;
    }

    .btn span {
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: top 0.5s;
    }

    .btn-text-one {
        position: absolute;
        width: 100%;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
    }

    .btn-text-two {
        position: absolute;
        width: 100%;
        top: 150%;
        left: 0;
        transform: translateY(-50%);
    }

    .btn:hover .btn-text-one {
        top: -100%;
    }

    .btn:hover .btn-text-two {
        top: 50%;
    }
    .post-btn{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: right;
    }

    .content-container {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        justify-content: center;
        max-width: 100%;
        margin: 4rem 2rem;
        border-radius: 70px;
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.8);
        padding: 2rem 3rem;
    }

</style>

<body class="container">

    <header>
        <a href="./index.html" class="nav-link-btn">
            <div class="logo">Blogo<span>Pedia</span></div>
        </a>
        <div class="buttons">
            <form action="./search.php" class="search-bar" method="post">
                <input type="text" placeholder="Search Profile" name="search-input" class="input">
                <button type="submit" class="ui-btn">
                    <span>
                        Search
                    </span>
                </button>
            </form>
            <a class="nav-link-btn" href="./login.html">
                <button class="ui-btn">
                    <span>
                        Login
                    </span>
                </button>
            </a>
            <a class="nav-link-btn" href="./signup.html">
                <button class="ui-btn">
                    <span>
                        Signup
                    </span>
                </button>
            </a>
        </div>
    </header>

    <section class="content-container">
            <div class="form-control">
                <h1> User Email : <h2><?php echo $user; ?></h2> 
                <span>

                    <form action="./update-password.php" method="post">
                        <h2>Update Password</h2>
                        <input autofill="off" placeholder="Old Password" type="text" name="t2">
                        <input placeholder="New Password" type="password" name="t3">
                        <button>Update</button>
                    </form>
                    <br>
                    <form action="./delete-user.php">
                        <h2>Detete Account</h2>
                        <button>Detete</button>
                    </form>


                </h1>
                    <a href="./index.html"></h2></a>
                </span>
                <div class="post-btn">
                    <button class="btn" type="submit">
                        <span class="btn-text-one">Goto</span>
                        <span class="btn-text-two">Home</span>
                    </button>
                </div>
            </div>
    </section>


    <!-- <footer>
        <p>&copy; 2024 Blogo<span style="color: #FEBF00;">Pedia</span>. All rights reserved.</p>
    </footer> -->

</body>

</html>