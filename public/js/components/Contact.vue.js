


const Contact = { template: '<div class="container mt-3"><div id="contact_form"><p v-if="errors.length">\n' +
'                <form method="post" id="form1" @submit.prevent="handleSubmit">' +
'<input name="_token" type="hidden" v-model="resumeMessage.csrf" />\n' +

'                    <p class="calibri main-text">Please feel free to send me a message!  I will review what has been sent to me and get back to you as soon as possible!  Thank you for taking the time to look at my portfolio &amp; resume.</p>\n' +
'                    <br/>\n' +
'                    <div data-role="content">\n' +
'                        <div class="form-group trebuchet">\n' +
'                            <label class="resume-label" for="name" data-theme="d">Name</label>\n' +
'\n' +
'                            <div data-role="fieldcontainer">\n' +
'                            <input v-validate="{ required: true }" class="form-control" type="text" id="name" name="name" data-theme="a" placeholder="Please Enter Your Name" v-model="resumeMessage.name" :class="{ \'is-invalid\': submitted && errors.has(\'name\') }" />\n' +
'<div v-if="submitted && errors.has(\'name\')" class="invalid-feedback">\n' +
'                  {{ errors.first("name") }}\n' +
'                </div>' +
'                            </div>\n' +
'\n' +
'                            </div>\n' +
'                        <br/>\n' +
'                        <div class="form-group trebuchet">\n' +
'                            <label class="resume-label" for="email" data-theme="d">E-mail</label>\n' +
'                        <div data-role="fieldcontainer">\n' +
'                            <input v-validate="{ required: true}" class="form-control" type="email" id="email" name="email" data-theme="a" placeholder="Please Enter Your Email" v-model="resumeMessage.email" :class="{ \'is-invalid\': submitted && errors.has(\'email\') }" />\n' +
'<div v-if="submitted && errors.has(\'email\')" class="invalid-feedback">{{ errors.first(\'email\') }}</div>' +
'                        </div>\n' +
'\n' +
'                        </div>\n' +
'                        <br/>\n' +
'                        <div class="form-group trebuchet">\n' +
'                        <label class="resume-label" for="comments" data-theme="d">Comments</label>\n' +
'                        <div data-role="fieldcontainer">\n' +
'                            <textarea v-validate="{ required: true}" class="form-control" id="comments" name="comments" data-theme="d" placeholder="Please Enter Your Message" v-model="resumeMessage.comments" :class="{ \'is-invalid\': submitted && errors.has(\'comments\') }" ></textarea>\n' +
'<div v-if="submitted && errors.has(\'comments\')" class="invalid-feedback">{{ errors.first(\'comments\') }}</div>' +
'                        </div>\n' +
'                        </div>\n' +
'                    </div>\n' +
'                    <br/>\n' +
'                    <input class="btn btn-lg btn-dark" type="submit" data-theme="a" value="Send Message" id="submit" @click="handleSubmit" />\n' +
'                    <br/>\n' +
'                    <br/>\n' +
'                </form>\n' +
'            </div><br/><br/><strong>Output:</strong>\n' +
'                        <pre>\n' +
'                        {{output}}\n' +
'                        </pre></div>',
    //two way data binding...
    data() {
        return {

            // errors: [],

            resumeMessage: {
                name: null,
                email: null,
                comments: null,
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            output: '',
            submitted: false

        }
    },

    // validations: {
    //     resumeMessage: {
    //         name: {
    //             required,
    //             minLength: minLength(2)
    //         },
    //     }
    // },

    methods: {

        // onSubmit: function() {
        //
        //     if (this.resumeMessage.name == null || this.resumeMessage.email == null || this.resumeMessage.comments == null) {
        //         alert('fill out the form completely please')
        //     }
        //
        //     else {
        //
        //   //  this.$http.post('/contact',JSON.stringify(this.resumeMessage));
        //
        //         let currentObj = this;
        //
        //         axios.post('/contact', this.resumeMessage
        //         ).then(function (response) {
        //             currentObj.output = response.data;
        //         })
        //             .catch(function (error) {
        //                 currentObj.output = error;
        //             });
        //             // .catch(function (error) {
        //             //     console.log(error);
        //             // });
        //
        //        // alert('nice work filling this form out')
        //     }
        //
        //
        //
        //
        //     this.name = null
        //     this.email = null
        //     this.comments = null
        // },

        reset() {
            this.resumeMessage = {
                name: '',
                email: '',
                comments: ''
            };
            this.errors.clear();
        },

        handleSubmit: function() {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    // alert("SUCCESS!! :-)\n\n" + JSON.stringify(this.user));

                    let currentObj = this;

                    axios.post('/contact', this.resumeMessage
                    )
                    //     .then(function (response) {
                    //     currentObj.output = response.data;
                    //
                    // })
                        .then(res =>{

                        // this.resumeMessage = {
                        //
                        //     name: null,
                        //     email: null,
                        //     comments: null
                        //
                        // }
                        // this.errors.clear();

                            this.reset();

                    })
                        .catch(function (error) {
                            currentObj.output = error;
                        });



                }
            });

            // this.name = ''
            // this.email = ''
            // this.comments = ''
            // this.$validator.reset()


        }

    }


}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});