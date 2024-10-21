<template>
    <div>
        <h1> Create Course</h1>
      <label for="course-content">Course Content:</label>
      <Editor
        api-key="vcwkyq7p6gyrdhh1d22kkvp84pwqk84xym639lkhd47of2pa"
        :init="{
          height: 500,
          menubar: false,
          plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
          ],
          toolbar:
            'undo redo | formatselect | bold italic backcolor | \
            alignleft aligncenter alignright alignjustify | \
            bullist numlist outdent indent | removeformat | help'
        }"
        v-model="courseContent"
      />
      <button @click="saveCourse">Save Course</button>

    </div>
  </template>
  
  <script>
  import { Editor } from '@tinymce/tinymce-vue';
  
  export default {
    components: {
      Editor
    },
    data() {
      return {
        courseContent: '' // Nội dung TinyMCE sẽ được lưu vào biến này
      };
    },
    methods: {
    saveCourse() {
      axios.post('/api/courses', {
        content: this.courseContent
      })
      .then(response => {
        console.log('Course saved successfully', response);
      })
      .catch(error => {
        console.error('Error saving course', error);
      });
    }
  }
};
  </script>
  