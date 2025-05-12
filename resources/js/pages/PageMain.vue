<script setup>
import { ref, watchEffect } from "vue";
import { useFetchJson } from "@/composables/useFetchJson";

// Récupérer les histoires
const { data: stories, loading: storiesLoading } = useFetchJson("stories");

// Constantes pour stocker l'histoire et le chapitre actuels
const currentStory = 1;
var currentStoryChapters = null;

function readStory(story) {
    console.log("afficher le premier chapitre de l'histoire n°" + story.id);
    // Récupérer les chapitres
    const { data: chapters, loading: chaptersLoading } =
        useFetchJson("stories/1/chapters");

    console.log(chapters);
    currentStoryChapters = chapters;
    console.log(currentStoryChapters);
}
</script>

<template>
    <section id="all-stories">
        <h1 class="text-red-500">Choisissez votre histoire</h1>
        <p v-if="storiesLoading">Chargement des histoires...</p>
        <ul
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"
        >
            <li
                v-for="story in stories"
                @click="readStory(story)"
                class="p-4 border rounded-lg shadow cursor-pointer hover:bg-gray-50"
            >
                {{ story.title }}
            </li>
        </ul>
    </section>
    <section id="current-story">
        <h2>Mon histoire</h2>
        <p>{{ currentStoryChapters }}</p>
    </section>
</template>

<style scoped></style>
