<template>
  <div>
    <h2>All Courses</h2>
    <div class="course-list">
      <div class="course-item" v-for="course in courses" :key="course.id">
        <img :src="course.image_url" alt="Course Image" class="course-image">

        <h3>{{ course.title }}</h3> <!-- Changed 'course.name' to 'course.title' -->
        <p>{{ course.description }}</p>
        <p><strong>Lessons:</strong> {{ course.lessons_count }}</p>
        <p><strong>Level:</strong> {{ course.level }}</p>
        <p><strong>Duration:</strong> {{ course.duration }} hours</p>
        <p><strong>Category:</strong> {{ course.category || 'N/A' }}</p>

        <router-link :to="'/courses/' + course.id" class="btn">View Course</router-link>
      </div>
      
    </div>
    <p v-if="errorMessage">{{ errorMessage }}</p> <!-- Display error message if any -->
  </div>
</template>

<script>
export default {
  
  data() {
    return {
      courses: [],
      errorMessage: '' // Add a property to hold error messages
    };
  },
  mounted() {
    fetch('/api/courses')
      .then(response => {
        console.log(response); // Check the response
        return response.json();
      })
      .then(data => {
        this.courses = data;
      })
      .catch(error => {
        console.error('Error fetching courses:', error); // Log any errors
      });
  }

};
</script>

<style scoped>
.course-list {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.course-item {
  background: #fff;
  padding: 20px;
  border-radius: 5px;
}
</style>
