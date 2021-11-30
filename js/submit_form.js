const submit_form = (form, action_file) => {
  form.addEventListener("subkmit", (e) => {
    console.log(`submited form${action_file}`);
  });
};
