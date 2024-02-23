<script setup>
import { ref, onMounted } from "vue";
import AutoComplete from 'primevue/autocomplete';
const countries = ref();
const selectedCountry = ref(null);
const filteredCountries = ref();

const search = (event) => {
  const myHeaders = new Headers();
  myHeaders.append("apikey", "HyvzylbFKHv5wHeLyPJXSe7uZegSr08J");
  const requestOptions = {
    method: "GET",
    headers: myHeaders,
    redirect: "follow"
  };
  fetch("https://api.tequila.kiwi.com/locations/query?term=" + event.query.toLowerCase() + "&locale=en-US&location_types=city&limit=100&active_only=true", requestOptions)
    .then((response) => response.json())
    .then((data) => {

      if (!event.query.trim().length) {
      filteredCountries.value = [...data.locations];
    } else {
      filteredCountries.value = data.locations.filter((country) => {
        return country.name.toLowerCase().startsWith(event.query.toLowerCase());
      });
    }
    })
    .catch((error) => console.error(error));
}

onMounted(() => {
});
</script>


<template>
  <AutoComplete v-model="selectedCountry" placeholder="Departure place ..." option-label="name"
    :suggestions="filteredCountries" @complete="search" />
</template>