"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[614],{3614:(t,e,r)=>{r.r(e),r.d(e,{default:()=>s});const a={name:"track-order",mounted:function(){},data:function(){return{order_id:null}},methods:{trackOrder:function(){this.$router.push({name:"get.invoice",params:{orderCode:this.order_id}})}}};const s=(0,r(1900).Z)(a,(function(){var t=this,e=t._self._c;return e("div",{staticClass:"sg-page-content"},[e("section",{staticClass:"track-order-section text-center"},[e("div",{staticClass:"container"},[e("div",{staticClass:"page-title"},[e("h1",[t._v(t._s(t.lang.track_order))])]),t._v(" "),e("form",{on:{submit:function(t){t.preventDefault()}}},[e("div",{staticClass:"track-order"},[e("div",{staticClass:"d-flex"},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.order_id,expression:"order_id"}],staticClass:"form-control",attrs:{type:"text",placeholder:t.lang.enter_your_parcel_id},domProps:{value:t.order_id},on:{input:function(e){e.target.composing||(t.order_id=e.target.value)}}}),t._v(" "),e("button",{staticClass:"btn btn-primary",attrs:{type:"submit"},on:{click:t.trackOrder}},[t._v(t._s(t.lang.track))])])])])])])])}),[],!1,null,null,null).exports}}]);