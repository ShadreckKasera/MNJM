<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> 
    <title>Contact Us</title> 
</head> 
 
<body class="bg-gray-100"> 
    <div class="py-12"> 
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> 
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                <div class="p-6 bg-white border-b border-gray-200"> 
                    <h1 class="text-3xl font-bold text-gray-800">Contact Us</h1> 
                    <p class="mt-4 text-gray-600">Have questions or feedback? We'd love to hear from you! Reach out to us using the form below:</p> 
                    <form class="mt-6" action="#" > 
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4"> 
                            <div> 
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label> 
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Your Name"> 
                            </div> 
                            <div> 
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label> 
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Your Email"> 
                            </div> 
                        </div> 
                        <div class="mt-4"> 
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label> 
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Your Message" rows="5"></textarea> 
                        </div> 
                        <div class="mt-6"> 
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Send Message</button> 
                        </div> 
                    </form> 
                </div> 
            </div> 
        </div> 
    </div> 
</body> 
 
</html>
