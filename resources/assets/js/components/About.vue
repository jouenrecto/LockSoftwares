<template>
    <div class="container has-text-centered">
      <div class="columns is-vcentered">
        <div class="column is-5">
                <gmap-map
                  :center="{lat:‎37.773972, lng:122.4194}"
                  :zoom="7"
                  style="width: 100%; height: 300px"
                ></gmap-map>
            </div>
            <div class="column is-6 is-offset-1">
              <h1 class="title is-2">
                We are located @
              </h1>
            </div>
        </div>
    </div>
</template>