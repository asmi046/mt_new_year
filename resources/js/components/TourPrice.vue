<template>
    <div class="tour_price">

        <div class="selectors">
            <div class="selector" @click.prevent="selectPrice(index)" :class="{ active: selected == index}" v-for="(item, index) in props.prices" :key="index">
                <div class="radio"></div>
                <div class="info">
                    <div class="price"><strong>{{ item.price }}</strong> ₽</div>
                    <p>{{ item.comment }}</p>
                </div>
            </div>
        </div>
        <button class="button">Купить путевку</button>
    </div>
</template>

<script setup>
import { ref } from 'vue';

    const props = defineProps({
        prices: Array
    })

    let selected = ref(0);

    const selectPrice = (index) => {
        selected.value = index
    }

</script>
