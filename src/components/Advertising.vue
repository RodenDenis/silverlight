<template>
    <div class="advertising">
        <div class="nested-advertising">
            Покрашено для рекламы
        </div>
        <div  class="nested-advertising">
            доступно до трех баннеров
        </div>
        <div  class="nested-advertising">
            больше - нет смысла
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>


<style>
.advertising {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    height: 80px;
    Background-color: #bbb;
}
.nested-advertising {
    background-color: #ddd;
    margin: auto;
}
</style>
