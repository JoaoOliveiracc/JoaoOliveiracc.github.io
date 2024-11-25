<x-layout title="Nova Notícia">
  <x-news.form :action="route('news.store')" :update="false" :categories="$categories"/>
</x-layout>