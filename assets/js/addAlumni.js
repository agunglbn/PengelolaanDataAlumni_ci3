/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author Kishor Mali
 */

$(document).ready(function () {

	var addUserForm = $("#addAlumni");

	var validator = addUserForm.validate({

		rules: {
			fname: { required: true },
			nisn: { required: true, digits: true },
			email: { required: true, email: true, remote: { url: baseURL + "checkEmailAlumni", type: "post" } },
			mobile: { required: true, digits: true, remote: { url: baseURL + "checkEmailAlumni", type: "post" } },
			jk: { required: true, selected: true },
			angkatan: { required: true, digits: true },
			tmsk: { required: true, Date: true },
			tklr: { required: true, Date: true },
			pekerjaan: { required: true, selected: true },
			img: { required: true, Image: true }
		},
		messages: {
			fname: { required: "This field is required" },
			email: { required: "This field is required Email", email: "Please enter valid email address", remote: "Email already taken" },
			mobile: { required: "This field is required", digits: "Please enter numbers only", remote: "Email already taken" },
			jk: { required: "This field is required", selected: "Please select atleast one option" },
			angkatan: { required: "This field is required", digits: "Please enter numbers only" },
			tmsk: { required: "This field is required", Date: "Please enter Date only" },
			tklr: { required: "This field is required", Date: "Please enter Date only" },
			pekerjaan: { required: "This field is required", selected: "Please select atleast one option" },
			img: { required: "This field is required", Image: "Please enter image only" }
		}
	});
});
