<div>
    <div class="tabs is-toggle">
        <ul>
            <li>
                <a id="publish-button">
                    <span class="icon is-small"><i class="fa fa-music"></i></span>
                    <span>Publish</span>
                </a>
            </li>
            <li>
                <a id="save-button">
                    <span class="icon is-small"><i class="fa fa-film"></i></span>
                    <span>Save</span>
                </a>
            </li>
            <li>
                <a id="preview-button">
                    <span class="icon is-small"><i class="fa fa-file-text-o"></i></span>
                    <span>Preview</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<hr/>
<div class="field">
    <p class="control">
        <input id="title" class="input is-medium" type="text" placeholder="Title">
    </p>
</div>
<div class="field">
  <p class="control">
    <textarea id="description" class="textarea is-focused" placeholder="Description"></textarea>
  </p>
</div>

<div id="summernote"><p>Content</p></div>
<div class="field">
  <p class="control">
    <span class="select">
      <select id="category">
        <option value="caterories">Categories</option>
        <option value="Entertain">Entertain</option>
      </select>
    </span>
  </p>
</div>
<div class="columns">
    <div class="column is-3">
        <div class="field has-addons">
            <p class="control">
                <input id="tag-input" class="input" type="text" placeholder="Add tags">
            </p>
            <p class="control">
                <a id="add-tag" class="button is-success">
                    Add
                </a>
            </p>
        </div>
    </div>
    <div class="column is-9">
        <div id="tags" style="border-bottom: 1px solid lightgray; padding-bottom: 10px;">
            <span class="tag is-light is-medium">Content tags</span>
        </div>
    </div>
</div>
