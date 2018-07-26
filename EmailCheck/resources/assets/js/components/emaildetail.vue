Vue.component('emaildetail',
{
  template:`      <div class="modal is-active">
        <div class="modal-background"></div>
        <div class="modal-content">
        <div class="box">
      <slot></slot>
<button class="modal-close is-large" aria-label="close" @click="$emit('close')"></button>
      </div>
        </div>

      </div>

      </div>`
});
new Vue({
  el: "#root",
  data:{
    showmodel:false
  }


});
