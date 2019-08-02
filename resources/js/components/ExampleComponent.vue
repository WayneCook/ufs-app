<template>
<v-app dark>
    <v-app-bar dark>
    <v-app-bar-nav-icon @click='drawer = !drawer'></v-app-bar-nav-icon>
    <v-toolbar-title>Page title</v-toolbar-title>

  </v-app-bar>

      <v-navigation-drawer clipped dark v-model='drawer'>
      <v-list-item>
        <v-list-item-content>
          <v-list-item-title class="title">
            Application
          </v-list-item-title>
          <v-list-item-subtitle>
            subtext
          </v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>

    </v-navigation-drawer>

</v-app>

</template>

<script>
  export default {

    data: () => ({
      drawer: false,
    }),
    created () {

    },
  }
</script>

<style scoped>
.hello {
    margin-top: 100px;
}
</style>

