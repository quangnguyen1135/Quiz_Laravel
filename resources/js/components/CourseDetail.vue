<template>
  <div class="row">
    <div class="col-lg-8">
      <div class="course-detail card mb-4">
        <div v-if="isLoading">Loading course details...</div>
        <div v-else>

          <div class="card-body">
            <h2 class="course-title">{{ course.title }}</h2>
            <p class="course-description">{{ course.description }}</p>
            <h3 class="lessons-title">Lessons</h3>
            <ul class="lessons-list list-group">
              <li v-for="chapter in course.chapters" :key="chapter.id" class="chapter-item">
                <!-- Collapsible Chapter Title -->
                <div
                  class="d-flex justify-content-between align-items-center chapter-title bg-light p-3 rounded shadow-sm"
                  @click.prevent="toggleCollapse(chapter.id)" :aria-expanded="isChapterOpen(chapter.id)"
                  :aria-controls="`chapter${chapter.id}`" role="button">

                  <!-- Chapter Title and Caret Icon on the Left -->
                  <a class="text-decoration-none d-flex align-items-center text-dark fs-6">
                    {{ chapter.title }}
                    <i :class="isChapterOpen(chapter.id) ? 'bi bi-caret-down-fill' : 'bi bi-caret-right-fill'"
                      class="ms-2"></i>
                  </a>

                  <!-- Lesson Count on the Right -->
                  <p class="mb-0 text-end text-muted small">{{ chapter.lessons.length }} Bài học</p>
                </div>



                <!-- Collapsible Content for Lessons with Transition -->
                <transition name="collapse">
                  <ul v-if="isChapterOpen(chapter.id)" :id="`chapter${chapter.id}`" class="lessons-list list-group">
                    <li v-for="lesson in chapter.lessons" :key="lesson.id"
                      class="d-flex justify-content-between align-items-center lesson-item list-group-item fs-10 text-dark">
                      <h4 class="lesson-title mb-0">{{ lesson.title }}</h4>
                      <span class="lesson-duration badge text-muted small">{{ lesson.duration }} phút</span>
                    </li>
                  </ul>
                </transition>

              </li>
            </ul>

          </div>
        </div>

      </div>
    </div>
    <div class="col-lg-4">
      <div class="card mb-4 shadow-sm">
        <div class="card-body text-center">
          <!-- Course Image -->
          <div class="img mb-3">
            <img src="../../../storage/app/public/images/ATGCt519q0aWMJxhOBUSHG16hlHOdLTzZIApx6sT.gif"
              alt="Course Image" class="img-fluid rounded" />
          </div>
          <!-- Price Tag -->
          <h1 class="text-success mb-3">Miễn phí</h1>
          <!-- Registration Button -->
          <button class="btn btn-primary w-50" @click="registerCourse">Đăng ký học</button>

          <!-- Course Information List -->
          <ul class="list-unstyled mt-3 text-start">
            <li class="mb-2">
              <i class="bi bi-star-fill text-warning me-2"></i>
              <span>Trình độ: {{ course.level ?? 'Chưa có thông tin' }}</span>
            </li>
            <li class="mb-2">
              <i class="bi bi-file-earmark-text text-info me-2"></i>
              <span>Tổng số bài học: {{ totalLessons }}</span>
            </li>
            <li class="mb-2">
              <i class="bi bi-clock text-primary me-2"></i>
              <span>Thời lượng: {{ formattedDuration }}</span>
            </li>
            <li class="mb-2">
              <i class="bi bi-globe text-success me-2"></i>
              <span>Học mọi lúc mọi nơi</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: 'CourseDetail',
  data() {
    return {
      course: {},
      openChapters: new Set(),
      isLoading: true
    };
  },
  mounted() {
    this.loadCourseData(); // Call the load function on mount
  },
  methods: {
    loadCourseData() {

      this.isLoading = true;
      const courseId = this.$route.params.id_course;
      fetch(`/api/courses/${courseId}`)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          this.course = data;
          console.log('Course data:', this.course);
        })
        .catch(error => {
          console.error('Error fetching course details:', error);
        })
        .finally(() => {
          this.isLoading = false; // Stop loading
        });
    },
    toggleCollapse(chapterId) {
      if (this.isChapterOpen(chapterId)) {
        // Remove chapter from the Set if it's already open
        this.openChapters.delete(chapterId);
      } else {
        // Add chapter to the Set if it's closed
        this.openChapters.add(chapterId);
      }
    },
    isChapterOpen(chapterId) {
      return this.openChapters.has(chapterId);
    },
    async registerCourse() {
      try {
        console.log('Registering for course with ID:', this.course.id); // Log course ID
        const token = '5b74be156a02b8f88e5baafff127d68d9e63a939f0be62599dee034cfacc85c4409ea6e92e574fdc';
        const response = await axios.post(
          '/api/register-course',
          { courseId: this.course.id },
          {
            headers: {
              'Content-Type': 'application/json',
              'Authorization': `Bearer ${token}`
            }
          }
        );

        // Check the response
        console.log('Response from API:', response.data); // Log the API response

        if (response.status === 200) {
          if (response.data.success) {
            alert('Successfully registered for the course!');
            // Redirect to lessons page
            this.$router.push({ path: `/courses/${this.course.id}` });
          } else {
            alert('Registration failed: ' + response.data.message);
          }
        } else {
          alert('Unexpected response status: ' + response.status);
        }
      } catch (error) {
        console.error('Error registering for the course:', error); // Log the error
        if (error.response) {
          // The request was made and the server responded with a status code
          console.error('Response data:', error.response.data);
          console.error('Response status:', error.response.status);
          alert('Error: ' + error.response.data.message || 'An error occurred. Please try again.');
        } else if (error.request) {
          // The request was made but no response was received
          console.error('No response received:', error.request);
          alert('No response from the server. Please check your connection.');
        } else {
          // Something happened in setting up the request that triggered an error
          console.error('Error:', error.message);
          alert('An error occurred while registering for the course. Please try again.');
        }
      }
    }

  },
  computed: {
    formattedDuration() {
      if (!this.course.duration) return 'Chưa có thông tin';
      const hours = Math.floor(this.course.duration / 60);
      const minutes = this.course.duration % 60;
      return `${hours} giờ ${minutes} phút`;
    },
    totalLessons() {
      if (!this.course.chapters) return 0;
      return this.course.chapters.reduce((sum, chapter) => sum + chapter.lessons.length, 0);
    }
  }
};
</script>

<style scoped>
.course-detail {
  padding: 20px;
}

.course-title {
  font-size: 24px;
  margin-bottom: 10px;
  color: #333;
}

.course-description {
  font-size: 16px;
  margin-bottom: 20px;
  color: #555;
}

.lessons-title {
  font-size: 20px;
  margin-bottom: 10px;
  color: #333;
}

.chapter-item {
  margin-bottom: 15px;
}

.chapter-title {
  font-size: 18px;
  color: #0056b3;
}

.lesson-item {
  padding: 10px;
}

.lesson-title {
  font-size: 18px;
  color: #007bff;
  margin: 0;
}

.lesson-content {
  font-size: 14px;
  color: #666;
}

.lesson-duration {
  font-size: 14px;
  color: #999;
}

.collapse-enter-active,
.collapse-leave-active {
  transition: height 0.3s ease;
}

.collapse-enter,
.collapse-leave-to {
  height: 0;
  overflow: hidden;
}


.card-body .img {
  max-height: 200px;
  /* Control image height */
  overflow: hidden;
}

.card-body img {
  object-fit: cover;
  /* Ensure the image covers the area */
  width: 100%;
  height: 100%;
}
</style>
