<template>
  <div class="lesson-view">
    <div class="lesson-header">
      <h1 class="lesson-title">{{ lesson.title }}</h1>
      <p class="lesson-description">{{ lesson.content }}</p>
      <div v-if="lesson.content">
        <h2>Nội dung</h2>
        <div v-html="lesson.content"></div> <!-- Display HTML content -->
      </div>
      <div class="button-group">
        <button class="btn btn-back" @click="goBack">Quay lại</button>
        <button class="btn btn-complete" @click="markAsCompleted">Hoàn thành</button>
        <button class="btn btn-next" @click="nextLesson">Bài tiếp theo</button>
      </div>
    </div>
    <ul class="chapter-items">
      <li v-for="chapter in chapters" :key="chapter.id" class="chapter-item">
        <h3 @click="toggleChapter(chapter)" style="cursor: pointer;">
          {{ chapter.title }} (0/{{ chapter.lessons.length }})
        </h3>
        <ul v-show="chapter.isOpen" class="lesson-items">
          <li v-for="lesson in chapter.lessons" :key="lesson.id" @click="selectLesson(lesson)" class="lesson-item"
            style="cursor: pointer;">
            <h4>{{ lesson.title }}</h4>
            <span>{{ lesson.duration }} phút</span>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      lesson: {},
      chapters: [],  // Change from lessons to chapters
      loading: true,

    };
  },
  mounted() {
    this.fetchLesson();
    this.fetchChapters(); // Updated method to fetch chapters and their lessons
  },
  methods: {
    fetchLesson() {
      const lessonId = this.$route.params.id_lesson;
      const courseId = this.$route.params.id_course;
      const chapterId = this.$route.params.id_chapter;
      this.loading = true; // Set loading to true at the start

      axios.get(`/api/courses/${courseId}/lessons/${chapterId}-${lessonId}`)
        .then(response => {
          this.lesson = response.data;
        })
        .catch(error => {
          console.error('Error fetching lesson:', error);
          this.lesson = null; // Reset lesson data on error
          alert('Failed to load lesson. Please try again.'); // User feedback
        })
        .finally(() => {
          this.loading = false; // Set loading to false after request
        });

    },

    fetchChapters() {
      const courseId = this.$route.params.id_course;
      axios.get(`/api/courses/${courseId}`)
        .then(response => {
          this.chapters = response.data.chapters.map(chapter => ({
            ...chapter,
            isOpen: false // Initialize each chapter as closed
          }));
        })
        .catch(error => {
          console.error('Error fetching chapters:', error);
        });
    },
    toggleChapter(chapter) {
      chapter.isOpen = !chapter.isOpen; // Toggle the isOpen property
    },
    goBack() {
      this.$router.go(-1);
    },
    markAsCompleted() {
      alert('Bài học đã hoàn thành!');
      // Here you can also add logic to mark the lesson as completed in the backend if needed
    },
    nextLesson() {
      alert('Chuyển đến bài học tiếp theo!');
      // Logic to navigate to the next lesson
    },
    selectLesson(lesson) {
      // Ensure that the lesson object has chapter_id property
      if (lesson.chapter_id) {
        const chapterId = lesson.chapter_id; // Adjust according to your lesson object structure
        const lessonId = lesson.id;
        this.$router.push(`/courses/${this.$route.params.id_course}/lessons/${chapterId}-${lessonId}`);
      } else {
        console.error('Lesson does not have a chapter_id property:', lesson);
      }
    },
  }
};
</script>

<style scoped>
.lesson-view {
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  max-width: 800px;
  position: relative;
  /* Add this to keep the layout structure */
  min-height: 400px;
}

.lesson-header {
  margin-bottom: 20px;
}

.lesson-title {
  font-size: 2rem;
  font-weight: bold;
  color: #333;
}

.lesson-description {
  font-size: 1.2rem;
  color: #666;
  margin-bottom: 20px;
}

.button-group {
  display: flex;
  gap: 10px;
  margin-top: 10px;
}

.btn {
  padding: 10px 15px;
  font-size: 1rem;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s;
}

.btn-back {
  background-color: #007bff;
  color: white;
}

.btn-back:hover {
  background-color: #0056b3;
}

.btn-complete {
  background-color: #28a745;
  color: white;
}

.btn-complete:hover {
  background-color: #218838;
}

.btn-next {
  background-color: #ffc107;
  color: black;
}

.btn-next:hover {
  background-color: #e0a800;
}

.chapter-items {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.chapter-item {
  margin-bottom: 15px;
}

.lesson-items {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.lesson-item {
  padding: 10px;
  background: #fff;
  margin: 5px 0;
  border-radius: 5px;
  transition: background 0.3s;
}

.lesson-item:hover {
  background: #f1f1f1;
}
</style>