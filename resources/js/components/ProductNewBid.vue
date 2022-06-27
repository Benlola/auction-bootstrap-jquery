<template>
  <div class="product-price last-bid">
    <div class="fs-6 text-secondary">Last bid:
      <span  class="text--base">{{ latest_bid.amount }}</span>
      <span class="text--base">{{ latest_bid.amount}} {{ currency }}</span>
<!--      {{ showAmount($product->latest_bid->amount) }} <span class="text&#45;&#45;base">{{ __($general->cur_text) }}</span>-->
    </div>
  </div>
</template>

<script>
    export default {
      props: [ "latest_bid", 'currency'],

      mounted() {

        }
    }
</script>
