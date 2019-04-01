<h1>Contact Us for more Information</h1>
<form action="{{route('contact')}}"method="post">
{{csrf_field()}}
 <input type="text" name="name"placeholder="Your name Please">
 <input type="email" name="email"placeholder="your valid E-mail">
 <textarea name="message" cols="30" rows="10"placeholder="message"></textarea>
 <input type="submit" value="submit">
 </form>