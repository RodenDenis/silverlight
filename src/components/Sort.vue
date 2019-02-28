<template>
  <div class="left-side-menu">
    <div class="option-menu">  
      <div class="option-tag">
        <div class="option-name">Hазвание раздела 1</div>
          <div class="option-group">
            <button class="option-param">выборка 1</button>
            <button class="option-param">выборка 2</button>
            <button class="option-param">выборка 3</button>
            <button class="option-param">выборка 4</button>
          </div>
      </div>
      <div class="option-tag">
        <div class="option-name">Hазвание раздела 2</div>
          <div class="option-group">
            <button class="option-param">выборка 1</button>
            <button class="option-param">выборка 2</button>
            <button class="option-param">выборка 3</button>
            <button class="option-param">выборка 4</button>
          </div>
      </div>
      <div class="option-tag">
        <div class="option-name">Hазвание раздела 3</div>
          <div class="option-group">
            <button class="option-param">выборка 1</button>
            <button class="option-param">выборка 2</button>
            <button class="option-param">выборка 3</button>
            <button class="option-param">выборка 4</button>
          </div>
      </div>
    </div>
    <div class="bottom-menu">
        Дополнительная менюшка и кнопка "наверх"
    </div>
  </div>
    
</template>

<script>

</script>

<style>
.left-side-menu {
  position: relative;
  padding-bottom: 150px;
}
.bottom-menu {
  position: absolute;
  bottom: 0px;
  width: 100%;
}
.option-name {
  padding: 10px 5px 10px 10px;
  text-align: left;
  background-color: #c2c2d6;
  color: black;
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}
.option-group {
  font-size: 0.9em;
  text-align: left;
}
.option-param {
  width: 100%;
  background-color: white;
  padding-top: 8px;
  padding-bottom: 8px;
  border: none;
  border-top: 1px solid #eee;
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
  outline: none;
  cursor: pointer;
  font-size: 0.9em;
}
.option-param:hover {
  background-color: #e0e0eb;
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}
.option-param:active {
  background-color: #bbb
}
.option-checkbox {
  margin-right: 10px;
  float: right;
}
</style>
