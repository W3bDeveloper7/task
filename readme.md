<h2>Now the task should accomplish the following :<h2>
 <hr>
    <ol>
        <li>
 Make an api endpoint with post method to receive body in the request, encrypted with laravel framework, this body will have an encrypted data with mcrypt method and will refer to this json data { "code" : 0 } or { "code" : 1 } after decryption.</li>
        <li>Then decrypt this request outside the action like "middleware".</li>
        <li>the request's code equals 0, return this json {"message":"success"}</li>
        <li> If the code equals 1, return {"message":"failure"}.</li>
        <li> Encrypt your return after the action not inside it.</li>
    </ol>
<hr>
<p> <b> Example </b> </p>
    
    Endpoint: http://localhost:8000/api/data
    
    Data: 
    {
    "body": "eyJpdiI6Ijl5VjI5WnFYUGl6UVwvSVBJWXplNjhBPT0iLCJ2YWx1ZSI6Ikp4eW5VcEYxVHc0QWxKcUI0Wk8rTVwvTThYOWx4MDhucUxCSGZwRXlwTEFjPSIsIm1hYyI6ImE3M2YyNWI3ODkzZDNkOTRiNzY3NDhiNTVlZTdhZjgyOTE2N2Q0MDE1MTkyY2FkYzQyM2IxYWQyOGI3ZDgxM2YifQ=="
    }
    
    Response:
    eyJpdiI6IktzNmZuMG1XTGFjQ1FMSlhXV3hkZlE9PSIsInZhbHVlIjoiS2xhZlwvVHc1cEpqVk1OU1haejd3SjdkcnJVZ1RnWUk5YmdRUVBIV2JyTWM9IiwibWFjIjoiYWYwMjhjODk1YzEzMzU0NDgwOThkYWE4NzE1NzhhZDVmMjAyM2NiNjVlNDQ0MmM0NzcwNWJiNGY4ZmMyNjlkNiJ9
    
    <hr>
    
    Description:
    I have created 2 middleware one for decrypt the Request & the other for encrypt the response
    
    check code status in controller if 0 success, 1 faliure
    
    
    
    
