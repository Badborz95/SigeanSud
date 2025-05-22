package com.example.pperepas;
import android.content.Intent;
import android.os.Bundle;

import androidx.appcompat.app.AppCompatActivity;

import android.widget.TextView;

public class ChoixEspece extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_choix_espece);

        // Récupérer les données de l'Intent
        Intent intent = getIntent();
        if (intent != null) {
            String selectedOption = intent.getStringExtra("selectedOption");
            afficherDonneesSelectionnees(selectedOption);
        }
    }

    // Méthode pour afficher les données sélectionnées dans l'activité
    private void afficherDonneesSelectionnees(String selectedOption) {
        TextView textView = findViewById(R.id.textView);
        textView.setText("Option sélectionnée : " + selectedOption);
    }
}
