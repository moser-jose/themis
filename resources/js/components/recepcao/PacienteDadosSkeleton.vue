<template>
    <div>
        <div class="flex skel">
            <div class="nome-p">
                    <div class="paci">
                        <h3><small></small> <span></span></h3>
                        <span class="ano"></span>
                    </div>
                    <div class="datos">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
            </div>
        </div>
        <div class="flex flx">
            <span></span>
            <span></span>
        </div>
        <div class="flex flx">
            <span class="text"></span>
        </div>
        <div class="flex flx">
            <span class="enf"></span>
        </div>
        <div class="flex flx">
            <div class="fl">

            </div>
            <div class="fl">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

<style lang="scss">
    .skel,.flx{
        small,span{
            animation: pulse-bg 2s infinite linear forwards;
            -webkit-animation:pulse-bg 2s infinite linear forwards;
            background: #ddd;
            background: linear-gradient(to right, #ddd 8%, #ccc 18%, #dddd 33%);
            background-size: 800px 104px;
        }
        .paci{

            h3{
                display: flex;
                small{
                    /* animation: pulse-bg 2s infinite; */

                }
                span{
                    /* animation: pulse-bg 2s infinite; */
                    width: 350px !important;
                    height: 40px;
                    border-radius: 2px;
                }
            }
            .ano{
                width: 80px;
                height: 40px;
                /* animation: pulse-bg 2s infinite; */
                border-radius: 2px;
            }
        }
        .datos{
            span{
                /* animation: pulse-bg 2s infinite; */
                height: 30px;
                width: 150px;
                border-radius: 2px;
            }
        }

        @keyframes pulse-bg {
        /*  0%{
                background-color: #ccc;
            }
            50%{
                background-color: #dddddd;
            }
            100%{
                background-color: #ccc;
            } */

            0%{
                background-position: -468px 0
            }
            100%{
                background-position: 468px 0
            }

        }
    }
    .flx{
        display: flex;
        align-items: center;
        gap: 20px;
        justify-content: space-between;
        span{
            height: 40px;
            width: 100%;
        }
        .text{
            height: 80px;
        }
        .enf{
            width:40%;
        }
        .fl{
            span{
                width:140px;
                height: 45px;
            }
        }
    }
</style>
