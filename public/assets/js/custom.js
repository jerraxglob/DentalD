// docu upload code
console.clear();

(function () {
    "use strict";
    const preventDefaults = (event) => {
        event.preventDefault();
        event.stopPropagation();
    };

    const highlight = (event) => event.target.classList.add("highlight");
    const unhighlight = (event) => event.target.classList.remove("highlight");

    const getInputAndGalleryRefs = (element) => {
        const zone = element.closest(".upload_dropZone") || false;
        const gallery = zone.querySelector(".upload_gallery") || false;
        const input = zone.querySelector('input[type="file"]') || false;
        return { input: input, gallery: gallery };
    };

    const handleDrop = (event) => {
        const dataRefs = getInputAndGalleryRefs(event.target);
        dataRefs.files = event.dataTransfer.files;
        handleFiles(dataRefs);
    };

    const handleBrowseClick = (event) => {
        const dataRefs = getInputAndGalleryRefs(event.target);
        if (dataRefs.input) {
            dataRefs.input.click(); // Trigger the click event on the file input
        }
    };

    const eventHandlers = (zone) => {
        const dataRefs = getInputAndGalleryRefs(zone);

        if (!dataRefs.input) return;

        // Prevent default drag behaviors
        ["dragenter", "dragover", "dragleave", "drop"].forEach((event) => {
            zone.addEventListener(event, preventDefaults, false);
            document.body.addEventListener(event, preventDefaults, false);
        });

        // Highlighting drop area when item is dragged over it
        ["dragenter", "dragover"].forEach((event) => {
            zone.addEventListener(event, highlight, false);
        });

        ["dragleave", "drop"].forEach((event) => {
            zone.addEventListener(event, unhighlight, false);
        });

        // Handle dropped files
        zone.addEventListener("drop", handleDrop, false);

        // Handle browse click
        const browseLink = zone.querySelector(".upload_gallery");
        if (browseLink) {
            browseLink.addEventListener("click", handleBrowseClick, false);
        }

        // Handle browse selected files
        dataRefs.input.addEventListener(
            "change",
            (event) => {
                dataRefs.files = event.target.files;
                handleFiles(dataRefs);
            },
            false
        );
    };

    const dropZones = document.querySelectorAll(".upload_dropZone");
    for (const zone of dropZones) {
        eventHandlers(zone);
    }

    const isImageFile = (file) =>
        ["image/jpeg", "image/png", "image/svg+xml"].includes(file.type);

    function previewFiles(dataRefs) {
        if (!dataRefs.gallery) return;
        for (const file of dataRefs.files) {
            let reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onloadend = function () {
                let img = document.createElement("img");
                img.className = "upload_img mt-2";
                img.setAttribute("alt", file.name);
                img.src = reader.result;
                dataRefs.gallery.appendChild(img);
            };
        }
    }

    const imageUpload = (dataRefs) => {
        if (!dataRefs.files || !dataRefs.input) return;

        const url = dataRefs.input.getAttribute("data-post-url");
        if (!url) return;

        const name = dataRefs.input.getAttribute("data-post-name");
        if (!name) return;

        const formData = new FormData();
        formData.append(name, dataRefs.files);

        fetch(url, {
            method: "POST",
            body: formData,
        })
            .then((response) => response.json())
            .then((data) => {
                console.log("posted: ", data);
                if (data.success === true) {
                    previewFiles(dataRefs);
                } else {
                    console.log("URL: ", url, "  name: ", name);
                }
            })
            .catch((error) => {
                console.error("errored: ", error);
            });
    };

    const handleFiles = (dataRefs) => {
        let files = [...dataRefs.files];

        files = files.filter((item) => {
            if (!isImageFile(item)) {
                console.log("Not an image, ", item.type);
            }
            return isImageFile(item) ? item : null;
        });

        if (!files.length) return;
        dataRefs.files = files;

        previewFiles(dataRefs);
        imageUpload(dataRefs);
    };
})();

// datepicker
$(document).ready(function () {
    $("#startDate").datepicker({
        format: "yyyy/mm/dd",
        todayHighlight: true,
        autoclose: true,
    });

    $("#endDate").datepicker({
        format: "yyyy/mm/dd",
        todayHighlight: true,
        autoclose: true,
    });
});
// next and previous button js on page patient sheet
function nextTab() {
    const activeTab = $(".nav-tabs .nav-link.active");
    const nextTab = activeTab.parent().next().find("a");
    if (nextTab.length > 0) {
        nextTab.tab("show");
    }
}

function prevTab() {
    const activeTab = $(".nav-tabs .nav-link.active");
    const prevTab = activeTab.parent().prev().find("a");
    if (prevTab.length > 0) {
        prevTab.tab("show");
    }
}
// accordian js

$(document).ready(function () {
    $(".accordion-button").click(function () {
        $(this).find("i").toggleClass("rotate-icon");
    });
});
// patient-sheet js
$(document).ready(function () {
    $(".clickable-row").click(function () {
        var route = $(this).data("route");
        window.location.href = route;
    });
});
