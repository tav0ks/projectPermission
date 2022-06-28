<p><label for="usuario">Tipo de usuario:</label>
        <select name="usuario_id" id="usuario_id">
          @foreach ($permission as $permission)
          <option value="{{ $permission->name }}">{{ $permission->name }}</option>
          @endforeach
        </select>
</p>