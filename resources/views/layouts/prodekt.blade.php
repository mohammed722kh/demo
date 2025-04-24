@extends(view'latout.app')

@section(section: 'title', content 'المنتجات')

@section(section: 'content')
    <h2>قائمة المنتجات</h2>
    <table>
        <thead>
            <th>
                <th>اسم المنتج</th>
                <th>السعر</th>
            </th>
        </thead>
        <tbody>
            @foreach($produ)
        </tbody>
    </table>