function showUploadWidget() {
  cloudinary.openUploadWidget(
    {
      cloudName: "<cloud name>",
      uploadPreset: "<upload preset>",
      sources: ["local", "url", "google_drive", "image_search"],
      googleApiKey: "<image_search_google_api_key>",
      showAdvancedOptions: true,
      cropping: true,
      multiple: false,
      defaultSource: "image_search",
      styles: {
        palette: {
          window: "#101010",
          windowBorder: "#90A0B3",
          tabIcon: "#B90303",
          menuIcons: "#5A616A",
          textDark: "#000000",
          textLight: "#FFFFFF",
          link: "#C10606",
          action: "#FFFFFF",
          inactiveTabIcon: "#D4D4D4",
          error: "#F44235",
          inProgress: "#0078FF",
          complete: "#20B832",
          sourceBg: "#1D1D1D",
        },
        fonts: {
          default: null,
          "'Poppins', sans-serif": {
            url: "https://fonts.googleapis.com/css?family=Poppins",
            active: true,
          },
        },
      },
    },
    (err, info) => {
      if (!err) {
        console.log("Upload Widget event - ", info);
      }
    }
  );
}
