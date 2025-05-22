package com.example.pperepas;

import android.content.Intent;
import android.os.Bundle;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Spinner;

public class MainActivity extends AppCompatActivity {
    boolean isFirstSelection = true;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
        Spinner spinner = findViewById(R.id.spinner);

        // Définir les options du Spinner
        String[] options = {"Empty", "Option 1", "Option 2", "Option 3"};

        // Créer un adaptateur pour le Spinner
        ArrayAdapter<String> adapter = new ArrayAdapter<>(this, android.R.layout.simple_spinner_item, options);

        // Spécifier l'apparence du Spinner déroulant
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);

        // Lier l'adaptateur au Spinner
        spinner.setAdapter(adapter);

        // Ajouter un écouteur d'événements pour le Spinner
        spinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
                // Ne rien faire lors de la première sélection automatique
                if (isFirstSelection) {
                    isFirstSelection = false;
                    return;
                }

                // Action à effectuer lorsqu'une option est sélectionnée
                String selectedOption = options[position];
                // Créer et lancer l'Intent avec les données sélectionnées
                Intent intent = new Intent(MainActivity.this, ChoixEspece.class);
                intent.putExtra("selectedOption", selectedOption);
                startActivity(intent);
            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {
                // Code à exécuter si aucune option n'est sélectionnée
            }
        });

    }

}