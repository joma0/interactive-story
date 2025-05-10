<script setup>
import { ref } from "vue";
import { useFetchJson } from "@/composables/useFetchJson";

// Récupérer les histoires
const { data: stories } = useFetchJson("stories");

// Constantes pour stocker l'histoire et le chapitre actuels
const currentStory = ref(null);
const currentChapter = ref(null);

function readStory(story) {
    console.log("afficher le premier chapitre de l'histoire n°" + story.id);

    currentStory.value = story;

    const { data: chapters } = useFetchJson(`stories/1/chapters`);
    console.log(chapters);
    currentChapter.value = chapters[0];
    console.log(currentChapter);
}
</script>

<template>
    <section id="all-stories">
        <h1>Choisissez votre histoire</h1>
        <ul>
            <li v-for="story in stories" @click="readStory(story)">
                {{ story.title }}
            </li>
        </ul>
    </section>
    <section id="current-story">
        <h2>Mon histoire</h2>
        <h2>{{ currentChapter?.number }}</h2>
        <p>{{ currentChapter?.text }}</p>
    </section>
</template>

<style scoped></style>
