$.get(`/dashboard/get`, function(data) {
  const candidates = data[0]
  const result = data[1]
  
  const candidatesName = $.map(candidates, candidate => candidate.name)

  
  const ctxP = document.getElementById("pieChart").getContext('2d');
  const myPieChart = new Chart(ctxP, {
    type: 'doughnut',
    data: {
      labels: candidatesName,
      datasets: [{
        data: result,
        backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5"]
      }]
    },
    options: {
      responsive: true
    }
  });
})




// const count = (comparison, data) => {
//   let splited = []
//   let result = []

//   comparison.forEach(comp => {
//     let spliting = $.map(data, dat => {if (dat == comp) return dat})

//     splited.push(spliting)
//     result = $.map(splited, split => split.length)
//   })

//   return result
// }