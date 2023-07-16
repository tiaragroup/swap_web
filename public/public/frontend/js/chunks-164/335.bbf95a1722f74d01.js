"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[335],{5335:(t,s,a)=>{a.r(s),a.d(s,{default:()=>e});const r={name:"change_password",data:function(){return{current:"change_password",loading:!1,formData:{current_password:"",new_password:"",confirm_password:"",is_password_set:this.$store.getters.getUser.is_password_set}}},components:{user_sidebar:a(1640).Z},methods:{changPassword:function(){var t=this,s=this.getUrl("user/change-password");this.loading=!0,axios.post(s,this.formData).then((function(s){t.loading=!1,s.data.success?(toastr.success(s.data.success,t.lang.Success+" !!"),t.formData.confirm_password="",t.formData.new_password="",t.formData.current_password="",t.formData.is_password_set=s.data.data.is_password_set,t.$store.dispatch("user",s.data.data)):s.data.error&&toastr.error(s.data.error,t.lang.Error+" !!")})).catch((function(s){t.loading=!1,422==s.response.status&&(t.errors=s.response.data.errors)}))}}};const e=(0,a(1900).Z)(r,(function(){var t=this,s=t._self._c;return s("div",{staticClass:"sg-page-content"},[s("section",{staticClass:"edit-profile"},[s("div",{staticClass:"container"},[s("div",{staticClass:"row"},[s("user_sidebar",{attrs:{current:t.current}}),t._v(" "),s("div",{staticClass:"col-lg-9"},[s("div",{staticClass:"edit-profile-box"},[s("div",{staticClass:"title justify-content-between"},[s("h1",[t._v(t._s(t.lang.change_password))])]),t._v(" "),s("form",{on:{submit:function(s){return s.preventDefault(),t.changPassword()}}},[s("div",{staticClass:"sg-card"},[1==t.authUser.is_password_set?s("div",{staticClass:"form-group"},[s("label",[t._v(t._s(t.lang.current_password))]),t._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:t.formData.current_password,expression:"formData.current_password"}],staticClass:"form-control",class:{error_border:t.errors.current_password},attrs:{type:"password",placeholder:t.lang.current_password},domProps:{value:t.formData.current_password},on:{input:function(s){s.target.composing||t.$set(t.formData,"current_password",s.target.value)}}})]):t._e(),t._v(" "),t.errors.current_password?s("span",{staticClass:"validation_error"},[t._v(t._s(t.errors.current_password[0]))]):t._e(),t._v(" "),s("div",{staticClass:"form-group"},[s("label",[t._v(t._s(t.lang.new_password))]),t._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:t.formData.new_password,expression:"formData.new_password"}],staticClass:"form-control",class:{error_border:t.errors.new_password},attrs:{type:"password",placeholder:t.lang.new_password},domProps:{value:t.formData.new_password},on:{input:function(s){s.target.composing||t.$set(t.formData,"new_password",s.target.value)}}})]),t._v(" "),t.errors.new_password?s("span",{staticClass:"validation_error"},[t._v(t._s(t.errors.new_password[0]))]):t._e(),t._v(" "),s("div",{staticClass:"form-group"},[s("label",[t._v(t._s(t.lang.confirm_new_password))]),t._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:t.formData.confirm_password,expression:"formData.confirm_password"}],staticClass:"form-control",class:{error_border:t.errors.confirm_password},attrs:{type:"password",placeholder:t.lang.confirm_new_password},domProps:{value:t.formData.confirm_password},on:{input:function(s){s.target.composing||t.$set(t.formData,"confirm_password",s.target.value)}}})]),t._v(" "),t.errors.confirm_password?s("span",{staticClass:"validation_error"},[t._v(t._s(t.errors.confirm_password[0]))]):t._e(),t._v(" "),t.loading?s("loading_button",{attrs:{class_name:"btn btn-primary"}}):s("button",{staticClass:"btn btn-primary",attrs:{type:"submit"}},[t._v(t._s(t.lang.save_change))])],1)])])])],1)])])])}),[],!1,null,null,null).exports},5662:(t,s,a)=>{a.d(s,{Z:()=>e});const r={name:"shimmer.vue",props:["height"],data:function(){return{style:{height:this.height+"px"}}}};const e=(0,a(1900).Z)(r,(function(){var t=this;return(0,t._self._c)("img",{staticClass:"shimmer",style:[t.height?t.style:null],attrs:{src:t.getUrl("public/images/default/preview.jpg"),alt:"shimmer"}})}),[],!1,null,null,null).exports},1640:(t,s,a)=>{a.d(s,{Z:()=>e});const r={name:"user_sidebar",props:["current","addresses"],data:function(){return{loading:!1,download_url:!1,show_menu:""}},mounted:function(){this.checkAuth()},computed:{totalReward:function(){return this.$store.getters.getTotalReward},modalType:function(){return this.$store.getters.getModalType}},components:{shimmer:a(5662).Z},methods:{checkAuth:function(){var t=this,s=this.getUrl("home/check-auth");axios.get(s).then((function(s){t.$store.dispatch("user",s.data.user),t.$store.commit("getOrderUrl",s.data.order_urls),t.authUser?"admin"==t.authUser.user_type&&t.$router.push({name:"home"}):t.$router.push({name:"login"}),s.data.reward&&t.$store.commit("setTotalReward",s.data.reward),s.data.download_urls&&(t.download_url=!0)}))},convertReward:function(){var t=this,s=this.getUrl("user/convert-reward"),a={amount:this.converted_reward/this.settings.reward_convert_rate,reward:this.converted_reward};a.amount>0&&this.totalReward.rewards>=this.converted_reward&&confirm("Are You Sure! You want to Convert ?")&&(this.loading=!0,axios.post(s,a).then((function(s){t.loading=!1,s.data.error?toastr.error(s.data.error,t.lang.Error+" !!"):(toastr.success(s.data.success,t.lang.Success+"!!"),$("#convert_reward").modal("hide"),t.converted_reward="",t.$store.dispatch("user",s.data.user),t.$store.commit("setTotalReward",s.data.reward))})).catch((function(s){t.loading=!1})))},showMenu:function(){"displayMenu"==this.show_menu?this.show_menu="":this.show_menu="displayMenu"}}};const e=(0,a(1900).Z)(r,(function(){var t=this,s=t._self._c;return t.authUser?s("div",{staticClass:"col-lg-3"},[s("div",{staticClass:"profile-details position-relative"},[s("div",{staticClass:"profile-thumb"},[s("img",{staticClass:"img-fluid",attrs:{src:t.authUser.profile_image,alt:t.authUser.full_name}})]),t._v(" "),s("h2",[t._v(t._s(t.authUser.full_name)+" "),s("router-link",{staticClass:"d-inline",attrs:{to:{name:"edit.profile"}}},[s("span",{staticClass:"mdi mdi-name mdi-pencil"})])],1),t._v(" "),s("a",{attrs:{href:"javascript:void(0)"}},[t._v(t._s(t.authUser.email))]),t._v(" "),1==t.settings.seller_system?s("router-link",{staticClass:"be_seller base",attrs:{to:{name:"migrate.seller"}}},[t._v("\n                "+t._s(t.lang.be_a_seller)+" "),s("span",{staticClass:"mdi mdi-name mdi-store-outline"})]):t._e()],1),t._v(" "),s("div",{staticClass:"sidebar-menu"},[s("ul",{staticClass:"global-list"},[s("li",{class:{active:"dashboard"===t.current}},[s("router-link",{attrs:{to:{name:"dashboard"}}},[s("span",{staticClass:"mdi mdi-name mdi-view-dashboard-outline"}),t._v(" "+t._s(t.lang.dashboard)+"\n                    ")])],1),t._v(" "),s("li",{class:{active:"addresses"===t.current}},[s("router-link",{attrs:{to:{name:"addresses"}}},[s("span",{staticClass:"mdi mdi-name mdi-map-marker-outline"}),t._v("\n                        "+t._s(t.lang.addresses)+"\n                    ")])],1),t._v(" "),s("li",{class:{active:"notification"===t.current}},[s("router-link",{attrs:{to:{name:"notification"}}},[s("span",{staticClass:"mdi mdi-name mdi-bell-outline"}),t._v("\n                        "+t._s(t.lang.notification)+"\n                    ")])],1),t._v(" "),s("li",{class:{active:"order_history"===t.current}},[s("router-link",{attrs:{to:{name:"order.history"}}},[s("span",{staticClass:"mdi mdi-name mdi-cart-outline"}),t._v("\n                        "+t._s(t.lang.order_history)+"\n                    ")])],1),t._v(" "),t.download_url?s("li",{class:{active:"digital_product_order_history"===t.current}},[s("router-link",{attrs:{to:{name:"orders.digital.product"}}},[s("span",{staticClass:"mdi mdi-name mdi-cart-arrow-down"}),t._v(" "+t._s(t.lang.digital_product_order)+"\n                    ")])],1):t._e(),t._v(" "),1==t.settings.coupon_system?s("li",{class:{active:"gift_voucher"===t.current}},[s("router-link",{attrs:{to:{name:"gift.voucher"}}},[s("span",{staticClass:"mdi mdi-name mdi-wallet-giftcard"}),t._v("\n                        "+t._s(t.lang.gift_voucher)+"\n                    ")])],1):t._e(),t._v(" "),s("li",{class:{active:"change_password"===t.current}},[s("router-link",{attrs:{to:{name:"change.password"}}},[s("span",{staticClass:"mdi mdi-name mdi-lock-outline"}),t._v("\n                        "+t._s(t.lang.change_password)+"\n                    ")])],1),t._v(" "),1==t.settings.wallet_system?s("li",{class:{active:"wallet_history"===t.current}},[s("router-link",{attrs:{to:{name:"wallet.history"}}},[s("span",{staticClass:"mdi mdi-wallet-outline"}),t._v("\n                        "+t._s(t.lang.my_wallet)+"\n                    ")])],1):t._e(),t._v(" "),t.addons.includes("reward")?s("li",{class:{active:"reward_history"===t.current}},[s("router-link",{attrs:{to:{name:"reward.history"}}},[s("span",{staticClass:"mdi mdi-vector-point"}),t._v(t._s(t.lang.my_rewards)+"\n                    ")])],1):t._e(),t._v(" "),t.addons.includes("affiliate")&&t.authUser.referral_code?s("li",{staticClass:"dp-arrow",class:{active:"affiliate_system"===t.current,displayMenu:"displayMenu"===t.show_menu},on:{click:t.showMenu}},[t._m(0),t._v(" "),s("ul",{staticClass:"dashboard-dp-menu"},[s("li",[s("router-link",{attrs:{to:{name:"affiliate.system"}}},[t._v("Affiliate System")])],1),t._v(" "),s("li",[s("router-link",{attrs:{to:"/sdfsfd"}},[t._v("iewww1")])],1)])]):t._e(),t._v(" "),1==t.settings.seller_system?s("li",{class:{active:"followed_shop"===t.current}},[s("router-link",{attrs:{to:{name:"shop.followed"}}},[s("span",{staticClass:"mdi mdi-home-heart"}),t._v(t._s(t.lang.shop)+"\n                    ")])],1):t._e()])]),t._v(" "),s("div",{staticClass:"modal fade reward",attrs:{id:"convert_reward",tabindex:"-1","aria-labelledby":"exampleModalLabel","aria-hidden":"true"}},[s("div",{staticClass:"modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable"},[s("div",{staticClass:"modal-content"},[s("div",{staticClass:"modal-header"},[s("h5",{staticClass:"modal-title"},[t._v(t._s(t.lang.reward_point))]),t._v(" "),t._m(1)]),t._v(" "),s("div",{staticClass:"modal-body reward_modal"},[s("form",{on:{submit:function(s){return s.preventDefault(),t.convertReward.apply(null,arguments)}}},[s("div",{staticClass:"row"},[s("div",{staticClass:"col-lg-12 text-center"},[s("div",{staticClass:"form-group"},[s("label",{attrs:{for:"reward"}},[t._v(t._s(t.lang.reward_point)+" ")]),t._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:t.converted_reward,expression:"converted_reward"}],staticClass:"form-control",attrs:{type:"text",id:"reward",placeholder:t.lang.enter_point_you_want_convert},domProps:{value:t.converted_reward},on:{input:function(s){s.target.composing||(t.converted_reward=s.target.value)}}})]),t._v(" "),null!=t.totalReward?s("div",{staticClass:"text-start"},[s("p",[t._v("Available Points to Convert : "+t._s(t.totalReward.rewards))]),t._v(" "),s("p",[t._v(t._s(t.settings.reward_convert_rate)+t._s(t.lang.reward_points)+t._s(t.priceFormat(1)))]),t._v(" "),t.totalReward.rewards>0?s("p",[t._v(t._s(t.lang.total_amount_you_will_get)+"\n                                            "+t._s(t.priceFormat(t.converted_reward/t.settings.reward_convert_rate)))]):t._e()]):t._e(),t._v(" "),t.loading?s("loading_button",{attrs:{class_name:"btn btn-primary mt-3"}}):s("button",{staticClass:"btn btn-primary mt-3",class:{disable_btn:t.converted_reward<t.settings.reward_convert_rate||t.totalReward.rewards<t.converted_reward},attrs:{type:"submit"}},[t._v("\n                                        "+t._s(t.lang.covert_rewards)+"\n                                    ")])],1)])])])])])])]):t._e()}),[function(){var t=this._self._c;return t("a",{attrs:{href:"javascript:void(0)"}},[t("span",{staticClass:"mdi mdi-vector-point"}),this._v("Affiliate\n                ")])},function(){var t=this._self._c;return t("button",{staticClass:"close modal_close",attrs:{type:"button","data-bs-dismiss":"modal","aria-label":"Close"}},[t("span",{attrs:{"aria-hidden":"true"}},[this._v("×")])])}],!1,null,null,null).exports}}]);