// // // Inside public/js/liveSearch.js

// // document.addEventListener('DOMContentLoaded', function () {
// //   const searchInput = document.querySelector('#searchInput'); // Assuming you have an input field with id="searchInput"
// //   const searchResultsContainer = document.querySelector('#searchResults'); // Assuming you have a container for displaying search results

// //   searchInput.addEventListener('input', function () {
// //       const query = searchInput.value.trim();

// //       if (query.length >= 2) { // Optional: Set a minimum length to trigger the search
// //           // Make an AJAX request to the server
// //           axios.get(`/live-search?query=${query}`)
// //               .then(response => {
// //                   displaySearchResults(response.data);
// //               })
// //               .catch(error => {
// //                   console.error('Error fetching search results:', error);
// //               });
// //       } else {
// //           // Clear search results if the query is too short
// //           searchResultsContainer.innerHTML = '';
// //       }
// //   });

// //   function displaySearchResults(results) {
// //       // Assuming each result is an object with a 'url' property
// //       const html = results.map(result => `<a href="${result.url}">${result.title}</a>`).join('');

// //       // Display the results in the container
// //       searchResultsContainer.innerHTML = html;
// //   }
// // });

// // Inside public/js/liveSearch.js

// document.addEventListener('DOMContentLoaded', function () {
//   const searchInput = document.querySelector('#searchInput'); // Assuming you have an input field with id="searchInput"
//   const searchResultsContainer = document.querySelector('#searchResults'); // Assuming you have a container for displaying search results

//   searchInput.addEventListener('input', function () {
//       const query = searchInput.value.trim();

//       if (query.length >= 2) { // Optional: Set a minimum length to trigger the search
//           // Make an AJAX request to the server
//           axios.get(`/live-search?query=${query}`)
//               .then(response => {
//                   displaySearchResults(response.data);
//               })
//               .catch(error => {
//                   console.error('Error fetching search results:', error);
//               });
//       } else {
//           // Clear search results if the query is too short
//           searchResultsContainer.innerHTML = '';
//       }
//   });

//   function displaySearchResults(results) {
//       // Assuming each result is a simple string
//       const html = results.map(result => `<div>${result}</div>`).join('');

//       // Display the results in the container
//       searchResultsContainer.innerHTML = html;
//   }
// });

// public/js/liveSearch.js

document.addEventListener('DOMContentLoaded', function () {
  const searchInput = document.querySelector('#searchInput'); // Gantilah dengan id input pencarian Anda
  const searchResultsContainer = document.querySelector('#searchResults'); // Gantilah dengan id container hasil pencarian Anda

  searchInput.addEventListener('input', function () {
      const query = searchInput.value.trim();

      if (query.length >= 2) {
          axios.get(`/posts?query=${query}`)
              .then(response => {
                  displaySearchResults(response.data);
              })
              .catch(error => {
                  console.error('Error fetching search results:', error);
              });
      } else {
          clearSearchResults();
      }
  });

  function displaySearchResults(results) {
      const html = results.map(result => {
          return `
              <a href="${result.url}" class="block mt-2 text-white hover:text-gray-400">
                  ${result.title}
              </a>
          `;
      }).join('');

      searchResultsContainer.innerHTML = html;
  }

  function clearSearchResults() {
      searchResultsContainer.innerHTML = '';
  }
});
