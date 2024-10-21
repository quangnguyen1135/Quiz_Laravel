import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '/courses',
    name: 'CourseList',
    component: () => import("@/components/CourseList.vue")
  },
  {
    path: '/courses/:id_course',
    name: 'CourseDetail',
    props: true,
    component: () => import("@/components/CourseDetail.vue")
  },
  {
    path: '/courses/:id_course/lessons/:id_chapter-:id_lesson',
    name: 'LessonView',
    props: true,
    component: () => import("@/components/LessonView.vue")
  },
  {
    path: "/:catchAll(.*)",
    component: () => import("@/components/NotFound.vue"),
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
