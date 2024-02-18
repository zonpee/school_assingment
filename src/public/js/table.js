export default {
    data() {
      return {
        isActive: false
      };
    },
    methods: {
      toggleClass() {
        this.isActive = !this.isActive;
      }
    }
};