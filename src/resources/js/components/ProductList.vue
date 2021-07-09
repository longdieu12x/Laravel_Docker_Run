<template>
    <div class="productList">
        <div class="filters">
            <h3>Danh muc cua toi</h3>
        </div>
        <div v-for="(category) in categories" :key="category.id">
                <input
                name="categories[]"
                v-model="filters.categories"
                :value="category.id"
                type="checkbox"/>
                {{category.name}}
        </div>
        <hr>
        <div class="list">
            <div v-for="product in products" :key="product.id">
                {{product.name}}
            </div>
        </div>
    </div>
</template>
<script>
import network from '../core/network';
export default {
  created () {
  },
    data() {
        return {
            categories: window.categories,
            products: [],
            page: 1,
            filters: {
                categories: [],
            }
        }
    },
    mounted(){
        this.getProducts();
    },
    methods: {
        getProducts(){
            network.get('ajax/product', this.filters)
                .then( res => {
                    this.products = res;
                })
        }
    },
    watch: {
        filters: {
            deep: true,
            handler(){
                this.getProducts();
            }
        }
    }

};
</script>
<style scoped>

</style>
