<div>
    <h1>Add Students</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name"/>
        <br><br>
        <input type="email" name="email" placeholder="Enter your email">
        <br><br>
        <input type="number" name="phone" placeholder="Enter your contact no.">
        <br><br>
        <button>Add student</button>
    </form>
</div>
