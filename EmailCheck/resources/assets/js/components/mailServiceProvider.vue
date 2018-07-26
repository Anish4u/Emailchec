<template>
    <div class=" col-md-12">


          <div class="form-group col-md-7">
              <label class="form-control-placeholder" > Email Service Provider</label>
              <input type="text" name="hostname" class="form-control" style=" margin: 0px;width:530px;height: 35px;" value=""required>
            </div>
            <div class="form-group col-md-2">
              <label class="form-control-placeholder" >Port</label>
              <input type="text" name="portnumber" class="form-control"  style=" margin: 0px;width:200px;height: 35px;" value="" required>
          </div>
          <div class="form-group col-md-1">
          </div>
          <div class="form-group col-md-1">
              <label class="form-control-placeholder" >Encryption</label>
              <input type="text" name="secure" class="form-control" style=" margin: 0px;width:150px;height: 35px;" value="" required>
          </div>


  </div>
</template>

 <script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
 </script>
