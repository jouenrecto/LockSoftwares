<template>
    <div id="app">
        <section class="hero is-fullheight is-default is-bold">
            <navigation-component></navigation-component>
                <div class="hero-body">
                    <transition>
                        <router-view></router-view>
                    </transition>
                </div>
            <footer-component></footer-component>
        </section>
    </div>
</template>

<script>
import FooterComponent from './components/Footer'
import NavigationComponent from './components/Navigation'

export default {
    components: {
        NavigationComponent,
        FooterComponent
    },
    monuted() {
        var burger = document.querySelector('.nav-toggle');
        var menu = document.querySelector('.nav-menu');
        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });
    }
}
</script>