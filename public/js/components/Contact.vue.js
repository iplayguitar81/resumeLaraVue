


const Contact = { template: '<div class="container mt-3"><div id="contact_form">\n' +
'                <form id="form1" @submit="onSubmit">\n' +
'                    <p class="calibri main-text">Please feel free to send me a message!  I will review what has been sent to me and get back to you as soon as possible!  Thank you for taking the time to look at my portfolio &amp; resume.</p>\n' +
'                    <br/>\n' +
'                    <div data-role="content">\n' +
'                        <div class="form-group trebuchet">\n' +
'                            <label class="resume-label" for="name" data-theme="d">Name</label>\n' +
'\n' +
'                            <div data-role="fieldcontainer">\n' +
'                            <input class="form-control" type="text" id="name" name="name" data-theme="a" placeholder="Please Enter Your Name" v-model="name" />\n' +
'                            </div>\n' +
'\n' +
'                            </div>\n' +
'                        <br/>\n' +
'                        <div class="form-group trebuchet">\n' +
'                            <label class="resume-label" for="email" data-theme="d">E-mail</label>\n' +
'                        <div data-role="fieldcontainer">\n' +
'                            <input class="form-control" type="email" id="email" name="email" data-theme="a" placeholder="Please Enter Your Email" v-model="email" />\n' +
'                        </div>\n' +
'\n' +
'                        </div>\n' +
'                        <br/>\n' +
'                        <div class="form-group trebuchet">\n' +
'                        <label class="resume-label" for="comments" data-theme="d">Message</label>\n' +
'                        <div data-role="fieldcontainer">\n' +
'                            <textarea class="form-control" id="comments" name="comments" data-theme="d" placeholder="Please Enter Your Message" v-model="comments" ></textarea>\n' +
'                        </div>\n' +
'                        </div>\n' +
'                    </div>\n' +
'                    <br/>\n' +
'                    <input class="btn btn-lg btn-dark" type="submit" data-theme="a" value="Send Message" id="submit"/>\n' +
'                    <br/>\n' +
'                    <br/>\n' +
'                </form>\n' +
'            </div></div>',
    //two way data binding...
    data() {
        return {
            name: null,
            email: null,
            comments: null
        }
    },

    methods: {

        onSubmit() {
            let resumeMessage = {
                name: this.name,
                email: this.email,
                comments: this.comments
            }
        }

    }


}