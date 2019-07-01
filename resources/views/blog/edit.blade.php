@extends('layouts.app')

@section('content')
<v-app id="inspire">
    <template>
        <v-layout row justify-center>
            <form action="/blog" method="post" style="width: 50%;" enctype="multipart/form-data">
                @csrf
                <v-card>
                    <v-card-title>
                        <span class="headline">Blog</span>
                    </v-card-title>
                    <v-card-text>
                        <v-layout wrap>
                            <v-flex xs12 sm12>
                                <v-text-field name="title" color="blue darken-2" label="Title" required value="{{ $post->title }}">
                                </v-text-field>
                            </v-flex>
                            <v-flex xs12 sm12>
                                <v-textarea name="description" color="blue" value="{{ $post->description }}">
                                    <div slot="label">
                                        Display content
                                    </div>
                                </v-textarea>
                            </v-flex>

                            <div ref="form" @submit.prevent>
                                <div class="large-12 medium-12 small-12 filezone">
                                    <input type="file" id="files" ref="files" v-on:change="handleFiles()" name="image"  />
                                    <p>
                                        Drop your files here <br>or click to search
                                    </p>
                                </div>

                                <div v-for="(file, key) in files" class="file-listing">
                                    <img class="preview" v-bind:ref="'preview'+parseInt(key)" />
                                    
                                    <div class="success-container" v-if="file.id > 0">
                                        Success
                                    </div>
                                    <div class="remove-container" v-else>
                                        <a class="remove" v-on:click="removeFile(key)">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </v-layout>
                        <textarea name="content" class="form-control my-editor" value="{{ $post->content }}"></textarea>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="blue darken-1" flat type="submit">Submit</v-btn>
                    </v-card-actions>
                </v-card>
            </form>
        </v-layout>
    </template>
</v-app>
@endsection

@section('style')
    
<style>
    input[type="file"] {
      opacity: 0;
      width: 100%;
      height: 200px;
      position: absolute;
      cursor: pointer;
    }
    
    .filezone {
      outline: 2px dashed grey;
      outline-offset: -10px;
      background: #ccc;
      color: dimgray;
      padding: 10px 10px;
      min-height: 200px;
      position: relative;
      cursor: pointer;
    }
    
    .filezone:hover {
      background: #c0c0c0;
    }
    
    .filezone p {
      font-size: 1.2em;
      text-align: center;
      padding: 50px 50px 50px 50px;
    }
    
    div.file-listing img {
      max-width: 90%;
    }
    
    div.file-listing {
      margin: auto;
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }
    
    div.file-listing img {
      height: 100px;
    }
    
    div.success-container {
      text-align: center;
      color: green;
    }
    
    div.remove-container {
      text-align: center;
    }
    
    div.remove-container a {
      color: red;
      cursor: pointer;
    }
    
    a.submit-button {
      display: block;
      margin: auto;
      text-align: center;
      width: 200px;
      padding: 10px;
      text-transform: uppercase;
      background-color: #ccc;
      color: white;
      font-weight: bold;
      margin-top: 20px;
    }
    
    #image {
      width: 90%;
      height: 150px;
    }
    </style>
    
@endsection

