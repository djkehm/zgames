//Axios puede hacer peticiones a laravel
windows.axios.defaults.headers.common["X-CSRF-TOKEN"] = document.querySelector("'meta[name=csfr-token']").textContent;