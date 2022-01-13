<template>
    <div class="nome-p skel">
        <div class="paci">
            <h3><small></small> <span></span></h3>
            <span class="ano"></span>
        </div>
        <div class="datos">
            <span>

            </span>

            <span>

            </span>
            <span>

            </span>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

<style lang="scss">
.skel{
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
</style>
