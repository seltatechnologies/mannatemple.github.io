<style>

    /* GLOBAL STYLING */
    *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        box-sizing: border-box;
        width: fit-content;
    }

    /* HIDDEN  CLASS */
    .hidden{
        display: none;
    }

    /* ACTIVIES STYLING */

    /* PURPLE COLOR SETTINGS */
    .bg-dark-purple{
        background: #2B0054;
    }
    .bg-purple{
        background: #3B0A69;
    }
    .bg-light-purple{
        background: #E6CCFF;
    }
    .color-dark-purple{
        color: #2B0054;
    }
    .color-purple{
        color: #3B0A69;
    }
    .color-light-purple{
        color: #E6CCFF;
    }
    
    /* ORANGE COLOR SETTINGS */
    .bg-orange{
        background: #FF8F69;
    }
    .bg-light-orange{
        background: #FFD8CB;
    }
    .color-orange{
        color: #FF8F69;
    }
    .color-light-orange{
        color: #FFD8CB;
    }

    .header{
        position: fixed;
        width: 100vw;
        z-index: 1000;
    }

    /* ACTIVITY STYLING */

    .activity{
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: -100;
        padding: 2%;
    }

    .time{
        background: #FF8F69;
        color: #FFD8CB;
    }

    /* MAIN ACTIVITY STYLING */

    .main-menu{
        overflow: scroll;
        white-space: nowrap;
        width: 100%;
    }

    .menu-item{
        margin: 5% 1%;
        width: 60vw;
        transform: translateX(3%);
        display: inline-block;
    }

    .explore-icon{
        text-align: center;
        padding: 5%;
        border-radius: 20px 20px 0 0;
        width: inherit;
    }
    .explore-icon span{
        font-size: 5em;
    }
    .icon-title{
        width: 100%;
        padding: 5%;
        position: relative;
        font-size: large;
        border-radius: 10px;
    }
    .icon-info{
        border-radius: 0 0 20px 20px;
        width: inherit;
        padding: 5%;
    }
    .main-activity h3{
        margin-bottom: 3%;
    }
    .main-activity .time{
        padding: 3%;
        border-radius: 10px;
        margin-top: 5%;
    }

    .manna-extras{
        width: 100%;
        position: relative;
        left:
        bottom: 0;
        padding: 5% 8%;
        border-radius: 30px;
    }
    .extra-items div{
        padding: 3%;
        border-radius: 15px;
        width: 26vw;
        display: inline-block;
        text-align: center;
        margin: 2% 0;
    }
    .extra-items span{
        font-size: 4em;
    }
    .extra-items h5{
        font-size: medium;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
    }

</style>