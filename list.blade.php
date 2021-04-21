@extends('subview/master')
@section('title', 'List')
@section('content')


<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    th{
        background-color: #dddddd;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    border: 1px solid #ddd;
    padding: 8px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md12">
        <table>
<tr>
<th>Title</th>
<th>Author</th>
<th>ISBN</th>
<th>Category</th>
<th>Page Count</th>
</tr>

<tr>
<td>Siddhartha</td>
<td>Hermann Hesse</td>
<td>9780553208849</td>
<td>Novel</td>
<td>152</td>
</tr>

<tr>
<td>Animal Farm</td>
<td>George Orwell</td>
<td>9788129116123</td>
<td>Novella</td>
<td>112</td>
</tr>

<tr>
<td>The 7 Habits of Highly Effective People</td>
<td>Stephen Covey</td>
<td>9781471129391</td>
<td>Business and Self-Help</td>
<td>381</td>
</tr>

<tr>
<td>The Red Book: Liber Novus</td>
<td>Carl Gustav Jung</td>
<td>9780393065671</td>
<td>Manuscript</td>
<td>404</td>
</tr>

</table>
        </div>
    </div>
</div>





@endsection
