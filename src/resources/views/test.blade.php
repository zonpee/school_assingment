<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <table>
    <tr v-for="(item, index) in items" :key="index">
      <td :style="{'background-color': getBackgroundColor(item)}">@{{ item.name }}</td>
      <td :style="{'background-color': getBackgroundColor(item)}">@{{ item.age }}</td>
    </tr>
  </table>


<script>
export default {
  data() {
    return {
      items: [
        { name: 'John', age: 25 },
        { name: 'Jane', age: 35 },
        { name: 'Bob', age: 45 },
        { name: 'Alice', age: 15 }
      ]
    }
  },
  methods: {
    getBackgroundColor(item) {
      if (item.age > 40) {
        return 'red'
      } else if (item.age > 20) {
        return 'yellow'
      } else {
        return 'green'
      }
    }
  }
}
</script>