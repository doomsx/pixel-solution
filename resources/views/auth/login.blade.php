

<x-layout>
     <x-page-heading>Login</x-page-heading>

     <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" type="email" name="email"/>
        <x-forms.input label="Password" type="password" name="password"/>

         <x-forms.button>Login</x-forms.button>
     </x-forms.form>
</x-layout>
