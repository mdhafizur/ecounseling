<template>
  <div>
    <form @submit.prevent="postReview">
      <legend>Rate Counselor</legend>
      <div class="form-group">
        <star-rating></star-rating>

        <lable for>Rating</lable>
        <input type="text" class="form-control" v-model="formData.rating" id placeholder="Input..." />
        <star-rating v-model="formData.rating"></star-rating>
      </div>
      <div class="form-group">
        <lable for>Review</lable>
        <input
          type="text"
          class="form-control"
          v-model="formData.review"
          id
          placeholder="Write Your Review"
        />
      </div>

      <input type="hidden" v-model="formData.counselor.id" value="counselor.id" />

      <button type="submit" class="button">Submit</button>
    </form>
  </div>
</template>


<script>
export default {
  props: ["counselor"],
  data() {
    return {
      formData: {}
    };
  },
  methods: {
    postReview() {
      alert("posting");
    }
  }
};
</script>

