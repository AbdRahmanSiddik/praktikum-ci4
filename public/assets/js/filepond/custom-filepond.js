// // Custom filepond js

// // Get a reference to the file input element
// const inputElement = document.querySelectorAll('input[type="file"]');

// inputElement.forEach((item) => {
//   // Create a FilePond instance
//   if (item.classList.contains("no-preview")) {
//     // Register the plugin
//     FilePond.registerPlugin(FilePondPluginFileRename);
//     const pond = FilePond.create(item);
//   }

//   if (item.classList.contains("show-preview")) {
//     FilePond.registerPlugin(FilePondPluginImagePreview);
//     const pond = FilePond.create(item);
//   }

//   if (item.classList.contains("transform-preview")) {
//     FilePond.registerPlugin(FilePondPluginImageTransform);
//     const pond = FilePond.create(item);
//   }

//   FilePond.create({
//     fileMetadataObject: {
//       markup: [
//         [
//           "rect",
//           {
//             left: 0,
//             right: 0,
//             bottom: 0,
//             height: "60px",
//             backgroundColor: "rgba(0,0,0,.5)",
//           },
//         ],
//         [
//           "image",
//           {
//             right: "10px",
//             bottom: "10px",
//             width: "128px",
//             height: "34px",
//             // src: "./filepond-logo.svg",
//             fit: "contain",
//           },
//         ],
//       ],
//     },
//     onpreparefile: (file, output) => {
//       const img = new Image();
//       img.src = URL.createObjectURL(output);
//       document.inputElement.appendChild(img);
//     },
//     server: null,
//   });
// });

// Register FilePond plugins globally
FilePond.registerPlugin(
  FilePondPluginFileRename,
  FilePondPluginImagePreview,
  FilePondPluginImageTransform
);

// Get all input elements of type file
const inputElements = document.querySelectorAll('input[type="file"]');

// Iterate through each input element
inputElements.forEach((item) => {
  // Configure options based on class
  let options = {};

  if (item.classList.contains("no-preview")) {
      options = {
          // Example: Rename file before upload
          fileRenameFunction: (file) => `renamed_${file.name}`,
      };
  }

  if (item.classList.contains("show-preview")) {
      options = {
          allowImagePreview: true,
          imagePreviewHeight: 150,
      };
  }

  if (item.classList.contains("transform-preview")) {
      options = {
          allowImageTransform: true,
          imageTransformOutputMimeType: "image/jpeg",
      };
  }

  // Create FilePond instance for each input with specific options
  FilePond.create(item, {
      ...options, // Merge specific options
      server: null, // Ensure FilePond works in standard form submission mode
  });
});
